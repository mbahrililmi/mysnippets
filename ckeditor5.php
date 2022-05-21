<!-- text area harus memiliki ID  -->
<!-- disini menggunakan id editor -->
<div class="mb-3">
    <label for="content" class="form-label">Kontent</label>
    <textarea class="form-control @error('content') is-invalid @enderror" id="editor" name="content" placeholder="Masukan Deskripsi" rows="3">{{ old('content') }}</textarea>
    @error('content')
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>

@push('after-style')
<style>
    .ck-editor__editable {
        min-height: 400px;
    }
</style>
@endpush

@push('after-script')
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugins/ckfinder/ckfinder.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush