<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea name="description_short" id="description_short" class="form-control">{{$article->description_short or ""}}</textarea>


<label for="">Полное описание</label>
<textarea name="description" id="description" class="form-control">{{$article->description or ""}}</textarea>

<hr>

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}" required>

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description or ""}}" required>

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keywords or ""}}" required>


<input class="btn btn-primary" type="submit" value="Сохранить">