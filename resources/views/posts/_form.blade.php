@csrf
<label for="" class="uppercase text-white-700 text-xs">
    Titulo
</label>
<span class="text-xs text-red-600">@error('title')
    {{$message}}
    @enderror
</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 text-gray-700"
    value="{{ old('title',$post->title) }}">




<label for="" class="uppercase text-white-700 text-xs">
    Normbre url
</label>
<span class="text-xs text-red-600">@error('slug')
    {{$message}}
    @enderror
</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4 text-gray-700"
    value="{{ old('slug',$post->slug) }}">



<label for="" class="uppercase text-white-700 text-xs">
    Contenido
</label>
<span class="text-xs text-red-600">@error('body')
    {{$message}}
    @enderror
</span>
<textarea name="body" rows="5"
    class="rounded border-gray-200 w-full mb-4 text-gray-700">{{ old('body',$post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-yellow-200">Volver</a>
    <input type="submit" value="Enviar" class="bg-green-500 md:bg-green-500 text-white rounded px-4 py-2">
</div>