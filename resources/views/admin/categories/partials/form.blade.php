<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($category_id))
        <option value="0" @if($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- Без родительской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea name="description_short" id="description_short" class="form-control">{{$category->description_short or ""}}</textarea>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">