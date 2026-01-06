@isset($data)
    <p>{{ $data['name'] }}</p>
@endisset

@empty($data)
    <p>No data found</p>
@endempty