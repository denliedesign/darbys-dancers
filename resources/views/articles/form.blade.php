
<div class="form-group my-3">
    <label for="newsTitle">Article Title</label>
    <input id="newsTitle" type="text" class="form-control" name="newsTitle" value="{{ old('newsTitle', $article->newsTitle ) }}">
    <div>{{ $errors->first('newsTitle') }}</div>
</div>

<div class="form-group my-3">
    <label for="newsContent">Article Content</label>
    <textarea name="newsContent" cols="30" rows="10" class="form-control newstext" id="mytextarea">{{ old('newsContent', $article->newsContent ) }}</textarea>
    <div>{{ $errors->first('newsContent') }}</div>
</div>

<div class="form-group my-3">
    <label for="newsPhoto">Article Image</label>
    <input type="file" class="form-control-file" name="newsPhoto">
    <div>{{ $errors->first('newsPhoto') }}</div>
</div>

@csrf
