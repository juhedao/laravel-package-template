<?php

//blade
Blade::directive('datetime', function($expression) {
    return "<?php echo with{$expression}->format('m/d/Y H:i'); ?>";
});

//form
Form::macro('myField', function() {
    return '<input type="awesome">';
});

//html
Html::macro('myhtml', function() {
    return '<div></div>';
});


