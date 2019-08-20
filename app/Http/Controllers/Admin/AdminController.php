<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Land;
use App\Model\LandImages;
use App\Model\Settings;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('app-admin');

//        return view()->file('admin-app/index.html');
    }

    /**
     * Получить глобальные настройки
     * @return \Illuminate\Http\JsonResponse
     */
    public function settingsGetAll()
    {
        $settings = Settings::find(1);

        return response()->json($settings);
    }

    /**
     * Изменить глобальные настройки
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function settingsEdit(Request $request)
    {
        $formInput = $request->except(['global_image']);
        $settings = Settings::find(1);

        if ($request->global_image && $request->global_image != null) {
            // Удалим старую картинку
            try {
                unlink('global-settings/' . $settings->global_image);
            } catch (\Exception $e) {
            }

            // Создадим новую картинку
            $imageName = time() . '_' . $request->global_image->getClientOriginalName();
            // сохраняем оригинал
            $request->global_image->move('global-settings', $imageName);
            $formInput['global_image'] = $imageName;
        }

        $settings->update($formInput);

        return response()->json('ok');
    }

    public function landGetAll()
    {
        $lands = Land::all();
        $lands->load('land_type', 'land_images');

        return response()->json($lands);
    }

    public function landGetOne($id)
    {
        $land = Land::find($id);
        $land->load('land_type', 'land_images');

        return response()->json($land);
    }

    public function addLand(Request $request)
    {
        $formInput = $request->except(['img_sliders', 'img_name']);

        // Скопируем и создадим глдавную картинку
        $image = $request->img_name;
        if ($image && $image != null) {
            $imageName = time() . '_' . $image->getClientOriginalName();

            // сохраняем оригинал
            $image->move('land-images', $imageName);

            $formInput['img_name'] = $imageName;
        }

        // Создадим землю и получим ее ссылку
        $land = Land::create($formInput);

        // Если есть доп картинки то загрузим их и создадим модели
        if ($request->img_sliders && $request->img_sliders != null && count($request->img_sliders) > 0) {
            $imgSliders = $request->img_sliders;

            // Сохраним имена файлов для создания моделей
            $imgSlidersNames = [];

            foreach ($imgSliders as $imgSlider) {
                $imageName = time() . '_' . $imgSlider->getClientOriginalName();
                $imgSlidersNames[] = $imageName;

                // Сохраняем файл
                $imgSlider->move('land-images', $imageName);
            }

            // Создаем модели
            foreach ($imgSlidersNames as $imgSlidersName) {
                LandImages::create([
                    'lands_id' => $land->id,
                    'img_name' => $imgSlidersName
                ]);
            }
        }

        return response()->json('ok');
    }

    /**
     * Удаление земли
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function deleteLand($id)
    {
        $land = Land::find($id);

        try {
            try {
                // Уничтожим картинку
                unlink('land-images/' . $land->img_name);
            } catch (\Exception $e) {
            }

            // Уничтожим картинки слайдера
            $images = LandImages::where('lands_id', '=', $id)->get();
            foreach ($images as $image) {
                unlink('land-images/' . $image->img_name);
            }
            LandImages::where('lands_id', '=', $id)->delete();

            // Уничтожим саму модель
            Land::destroy($id);

            return response()->json('ok');
        } catch (\Exception $e) {
            return response()->setStatusCode(500);
        }
    }

    /** Удаление 1 картинки слайдера из земли
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function deleteLandImage($id)
    {
        $image = LandImages::find($id);

        try {
            // Уничтожим картинку
            unlink('land-images/' . $image->img_name);

            // Уничтожим саму модель
            LandImages::destroy($id);

            return response()->json('ok');
        } catch (\Exception $e) {
            return response()->setStatusCode(500);
        }
    }

    public function editLand(Request $request, $id)
    {
        $land = Land::find($id);
        $formInput = $request->except(['img_sliders', 'img_name']);

        // Заменим главную картинку если есть
        $image = $request->img_name;
        if ($image && $image != null) {
            $imageName = time() . '_' . $image->getClientOriginalName();

            // сохраняем оригинал
            $image->move('land-images', $imageName);

            try {
                // Уничтожим предыдущую картинку
                unlink('land-images/' . $land->img_name);
            } catch (\Exception $e) {
            }

            $formInput['img_name'] = $imageName;
        }

        // Если есть доп картинки то загрузим их и создадим модели
        if ($request->img_sliders && $request->img_sliders != null && count($request->img_sliders) > 0) {
            $imgSliders = $request->img_sliders;

            // Сохраним имена файлов для создания моделей
            $imgSlidersNames = [];

            foreach ($imgSliders as $imgSlider) {
                $imageName = time() . '_' . $imgSlider->getClientOriginalName();
                $imgSlidersNames[] = $imageName;

                // Сохраняем файл
                $imgSlider->move('land-images', $imageName);
            }

            // Создаем модели
            foreach ($imgSlidersNames as $imgSlidersName) {
                LandImages::create([
                    'lands_id' => $land->id,
                    'img_name' => $imgSlidersName
                ]);
            }
        }

        // Обновляем модель
        $land->update($formInput);
    }
}
