@props(['name', 'label', 'type' => 'text'])

<div class="mb-3">
    <label for="{{ Str::slug($name) }}" class="form-label mb-2">{{ $label }}</label>
    @if ($type == 'select')
    <select {{ $attributes->class(['select2-native'])->merge([
        'id' => Str::slug($name),
        'name' => $name,
        'placeholder' => $label,
        'autocomplete' => 'off'
    ]) }}>
        <option value="">{{ $label }}</option>
        {{ $slot }}
    </select>
    @elseif($type == 'file')
    <input {{ $attributes->class(['form-control'])->merge([
        'id' => Str::slug($name),
        'type' => 'file',
    ]) }}>
    @else
    <input {{ $attributes->class(['form-control'])->merge([
        'id' => Str::slug($name),
        'type' => $type
    ]) }}>
    @endif
</div>
