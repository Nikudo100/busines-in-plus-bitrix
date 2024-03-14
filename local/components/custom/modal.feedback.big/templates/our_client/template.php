<div class="about clients pos-rel">
    <div class="client-review-bg"></div>
    <div class="container">
        <div class="be">
            <div class="be-title">Стать нашим <span>клиентом</span></div>
            <form class="be-form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
                <?= bitrix_sessid_post() ?>
                <div class="be-form-row e-3">
                    <input placeholder="Фамилия *" type="text" name="user_last_name" value="<?= $arResult["AUTHOR_LAST_NAME"] ?>">
                    <input placeholder="Имя *" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                    <input placeholder="Компания *" type="text" name="user_company" value="<?= $arResult["AUTHOR_COMPANY"] ?>">
                </div>
                <div class="be-form-row e-2">
                    <input placeholder="Вид деятельности *" type="text" name="user_activity" value="<?= $arResult["AUTHOR_ACTIVITY"] ?>">
                    <input placeholder="Город *" type="text" name="user_city" value="<?= $arResult["AUTHOR_CITY"] ?>">
                </div>
                <div class="be-form-row e-3">
                    <input placeholder="Должность" type="text" name="user_position" value="<?= $arResult["AUTHOR_POSITION"] ?>">
                    <input placeholder="Телефон *" type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
                    <input placeholder="E-mail *" type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                </div>
                <div class="be-form-chek">
                    <img src="<?= S_T_P  ?>/assets/img/contacts/Group 2.svg" alt="">
                    <span>Я выражаю согласие с <a href="">Политикой конфиденциальности</a></span>
                </div>
                <? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
                    <? foreach ($arResult["ERROR_MESSAGE"] as $v) : ?>
                        <div class="alert alert-danger"><?= $v ?></div>
                    <? endforeach; ?>
                <? endif; ?>
                <? if ($arResult["OK_MESSAGE"] <> '') : ?>
                    <div class="alert alert-success"><?= $arResult["OK_MESSAGE"] ?></div>
                <? endif; ?>
                <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                <input class="be-form-button" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>