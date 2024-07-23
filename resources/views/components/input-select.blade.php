@php
 {{
    $array = array(
    48 => "48th Superintendent Basic Course",
    49 => "49th Superintendent Basic Course",
    50 => "50th Superintendent Basic Course",
    51 => "51st Superintendent Basic Course",
    52 => "..."

 
 );}}   
@endphp
<select {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
    @foreach ($array as $key => $value)
        <option value={{$key}}>{{$value}}</option>
    @endforeach
</select>