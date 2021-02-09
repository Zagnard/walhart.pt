<div class="form-group">
    <label for="inputDescription">Questão</label>
    <textarea class="form-control" name="questions" id="inputDescription">{{old('questions',$faq->questions)}}</textarea>
</div>
<div class="form-group">
    <label for="inputDescription">Answer</label>
    <textarea class="form-control" name="answers" id="inputDescription">{{old('answers',$faq->answers)}}</textarea>
</div>