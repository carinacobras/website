<?php
    return [
        'dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}',
        'inputContainer' => '<div class="form-group">{{content}}</div>',
        'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
        'checkbox' => '<input type="checkbox" class="form-check-input" name="{{name}}" value="{{value}}"{{attrs}}>',
        'nestingLabel' => '{{hidden}}{{input}}<label class="form-check-label" {{attrs}}>{{text}}</label>'
    ];
?>