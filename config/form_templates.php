<?php
    return [
        'dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}',
        'inputContainer' => '<div class="form-group">{{content}}</div>',
        'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
        'button' => '<button class="btn btn-primary" {{attrs}}>{{text}}</button>',
        'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
        'textarea' => '<textarea class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
        'checkbox' => '<input type="checkbox" class="form-check-input" name="{{name}}" value="{{value}}"{{attrs}}>',
        'checkboxWrapper' => '<div class="form-check">{{label}}</div>',
        'nestingLabel' => '{{hidden}}<label class="form-check-label" {{attrs}}>{{input}} {{text}}</label>'
    ];
?>