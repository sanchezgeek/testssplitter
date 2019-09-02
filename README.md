# Tests-splitter

Утилита для распараллеливания тестов

# Сборка

Для сборки изображения используйте `task build` (предварительно необходимо установить утилиту [go-task](https://github.com/go-task/task)).

# Использование

Запускаем контейнер на основе изображения `reg.bigln.ru/tests-splitter`.

Для разбиения тестов на группы выполняем `robo parallel:split-tests ${COUNT} ${APP_ROOT} $SUITE ${APP_ROOT}/tests/_data/paracept/${SUITE}/part_`

Первым параметром (`${COUNT}`) передаём количество групп.

Второй параметр (`${APP_ROOT}`) - путь до директории, содержащей codeception.yml.

Третий папаметр (`${SUITE}`) - имя suite, тесты из которого необхоимо разбить на группы.

Четвёртый - шаблон пути файлов для записи результатов.
