<?php
trait Validatable {
    public function validate($data, $rules) {
        foreach ($rules as $field => $rule) {
            if (!isset($data[$field])) {
                echo "Ошибка: поле '$field' обязательно.<br>";
                return false;
            }
            if ($rule === 'email' && !filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                echo "Ошибка: неверный формат email.<br>";
                return false;
            }
            if ($rule === 'password' && strlen($data[$field]) < 6) {
                echo "Ошибка: пароль должен быть не менее 6 символов.<br>";
                return false;
            }
        }
        return true;
    }
}

class RegistrationForm {
    use Validatable;

    public function submit($data) {
        $rules = [
            'email' => 'email',
            'password' => 'password',
            'name' => 'required'
        ];

        if ($this->validate($data, $rules)) {
            echo "Регистрация успешна!<br>";
        }
    }
}

class LoginForm {
    use Validatable;

    public function submit($data) {
        $rules = [
            'email' => 'email',
            'password' => 'required'
        ];

        if ($this->validate($data, $rules)) {
            echo "Вход выполнен!<br>";
        }
    }
}

$regForm = new RegistrationForm();
$regForm->submit([
    'email' => 'user@example.com',
    'password' => '123456',
    'name' => 'Иван'
]);

$loginForm = new LoginForm();
$loginForm->submit([
    'email' => 'invalid-email',
    'password' => '123'
]);