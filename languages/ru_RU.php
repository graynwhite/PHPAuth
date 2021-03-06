<?php
$lang = array();

$lang['user_blocked'] = "Ваш аккаунт заблокирован.";
$lang['user_verify_failed'] = "Защитный код код недействителен.";

$lang['email_password_invalid'] = "Недопустимые почтовый ящик или пароль.";
$lang['email_password_incorrect'] = "Пользователь с указанным почтовым ящиком не обнаружен в системе или пароль не подходит.";
$lang['remember_me_invalid'] = 'Недопустимое значение поля «запомнить пользователя».';

$lang['password_short'] = "Пароль слишком короткий.";
$lang['password_weak'] = "Пароль слишком ненадёжный.";
$lang['password_nomatch'] = "Пароли не совпадают.";
$lang['password_changed'] = "Пароль успешно изменён.";
$lang['password_incorrect'] = "Текущий пароль указан неверно.";
$lang['password_notvalid'] = "Недопустимый пароль.";

$lang['newpassword_short'] = "Новый пароль слишком короткий.";
$lang['newpassword_long'] = "Новый пароль слишком длинный.";
$lang['newpassword_invalid'] = "Новый пароль должен содержать хотя бы одну цифру, хотя бы одну строчную букву и хотя бы одну прописную.";
$lang['newpassword_nomatch'] = "Новые пароли не совпадают.";
$lang['newpassword_match'] = "Новый пароль такой же, как старый.";

$lang['email_short'] = "Адрес почтового ящика слишком короткий.";
$lang['email_long'] = "Адрес почтового ящика слишком длинный";
$lang['email_invalid'] = "Недопустимый почтовый ящик.";
$lang['email_incorrect'] = "Почтовый ящик неверен.";
$lang['email_banned'] = "Этот почтовый ящик запрещён.";
$lang['email_changed'] = "Почтовый ящик изменен успешно.";
$lang['email_taken'] = "Этот почтовый ящик уже используется!";

$lang['newemail_match'] = "Новый почтовый ящик совпадает со старым.";

$lang['account_inactive'] = "Учётная запись ещё не активирована.";
$lang['account_activated'] = "Учётная запись активирована.";

$lang['logged_in'] = "Вы вошли в систему.";
$lang['logged_out'] = "Вы вышли из системы.";

$lang['system_error'] = "Произошла системная ошибка (проблема с cookies, сессией или базой данных). Попробуйте ещё раз.";

$lang['register_success'] = "Учётная запись создана. На вашу почту отправлена инструкция по активации.";
$lang['register_success_emailmessage_suppressed'] = "Учётная запись создана.";

$lang['resetkey_invalid'] = "Ключ сброса пароля неправильного формата.";
$lang['resetkey_incorrect'] = "Ключ сброса пароля неверный.";
$lang['resetkey_expired'] = "Срок действия ключа сброса пароля истёк!";

$lang['activationkey_invalid'] = "Недопустимый ключ акцивации учётной записи.";
$lang['activationkey_incorrect'] = "Неверный ключ акцивации учётной записи.";
$lang['activationkey_expired'] = "Срок действия ключа активации истёк!";

$lang['reset_requested'] = "Запрос на сброс пароля выслан по почте.";
$lang['reset_requested_emailmessage_suppressed'] = "Запрос сброса пароля создан.";
$lang['reset_exists'] = "Сброс пароля уже запрошен.";
$lang['password_reset'] = "Пароль сброшен успешно.";

$lang['already_activated'] = "Учетная запись уже активирована.";
$lang['activation_sent'] = "Сообщение с инструкцией по активации учётной записи выслано.";
$lang['activation_exists'] = "Мы уже высылали вам сообщение с инструкцией по активации учетной записи.";

$lang['email_activation_subject'] = "%s — активация учётной записи";
$lang['email_activation_body'] = 'Здравствуйте,<br/><br/>для входа в систему вам нужно сначала активировать ваш аккаунт. Перейдите, пожалуйста, по этой ссылке: <strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/> и введите следующий ключ активации: <strong>%3$s</strong><br/><br/> Если не регистрировались на сайте %1$s, значит это сообщение вы получили по ошибке. Пожалуйста, проигнорируйте его.';
$lang['email_activation_altbody'] = 'Здравствуйте, \n\n для входа в систему вам нужно сначала активировать ваш аккаунт. Перейдите, пожалуйста, по этой ссылке: \n %1$s/%2$s \n\n и введите следующий ключ активации: %3$s \n\n Если не регистрировались на сайте %1$s, значит это сообщение вы получили по ошибке. Пожалуйста, проигнорируйте его.';

$lang['email_reset_subject'] = "%s — запрос сброса пароля";
$lang['email_reset_body'] = 'Здравствуйте,<br/><br/>Для сброса вашего пароля пройдите, пожалуйста, по этой ссылке:<br/><br/><strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/>Вам нужно будет использовать следующий ключ для сброса пароля: <strong>%3$s</strong><br/><br/>Если вы недавно не запрашивали сброс пароля на сайте %1$s, значит это сообщение вы получили по ошибке. Пожалуйста, проигнорируйте его.';
$lang['email_reset_altbody'] = 'Здравствуйте, \n\n Для сброса вашего пароля пройдите, пожалуйста, по этой ссылке: \n %1$s/%2$s\n\n Вам нужно будет использовать следующий ключ для сброса пароля: %3$s\n\n Если вы недавно не запрашивали сброс пароля на сайте %1$s, значит это сообщение вы получили по ошибке. Пожалуйста, проигнорируйте его.';

$lang['account_deleted'] = "Учётная запись удалена.";
$lang['function_disabled'] = "Эта функция была отключена.";
