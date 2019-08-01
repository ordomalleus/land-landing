<div class="fixed-form-menu">
    <a id="form-menu" class="btn btn-floating btn-large"><i class="material-icons medium">menu</i></a>
</div>

<div id="form-section" class="tap-target" data-target="form-menu">
    <div class="tap-target-content">
        <h5>Оставте данные и с вами свяжуться</h5>
        <form id="form-input" class="form">
            <div class="input-field">
                <input placeholder="Ф.И.О." id="form-input-name" type="text" class="validate" required>
                <label for="form-input-name">Ф.И.О.</label>
            </div>
            <div class="input-field">
                <input placeholder="Номер телефона" id="form-input-phone" type="tel" class="validate" required>
                <label for="form-input-phone">Номер телефона</label>
            </div>
            <div class="input-field">
                <textarea placeholder="Сообщение" id="form-input-text" class="materialize-textarea validate"></textarea>
                <label for="form-input-text">Сообщение</label>
            </div>
            <div>
                <button id="form-submit" class="btn waves-effect waves-light" type="submit" name="action">Отправить
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>
