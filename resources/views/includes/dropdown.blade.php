@foreach( array_column($list->toArray(), $fieldName) as $row)
    <option value="{{ $row }}"> {{ $row  }}</option>
@endforeach
