<div class="form-group">
<div class="checkbox">
    <label>
        {{ Form::checkbox($name, $value, $value, array_merge(['class' => 'form-control'], $attributes)) }}
        {{ $label }}
    </label>
</div>
</div>