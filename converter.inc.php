<script type="text/javascript">
$(function() {
  $('.convLink').click(function(){
    var siteUrl = $('#siteUrl').val(); siteUrl = '<a href="'+siteUrl+'">'; var endUrl = '</a>';
    var soursText = $('#soursText').val();
    soursText = soursText.replace(new RegExp("#a#",'g'), siteUrl);
    soursText = soursText.replace(new RegExp("#/a#",'g'), endUrl);
    $('#extText').empty().val(soursText); 
  });
});
</script>
<div class="row">
  <div class="form-group">
    <label for="siteUrl">Ссылка на сайт</label>
    <input type="text" class="form-control" id="siteUrl" name="siteUrl" placeholder="Введите адрес блога"  value="" />
  </div>
  <div class="form-group">
    <label for="soursText">Исходные ссылки</label>
    <textarea rows="10" cols="50" id="soursText" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-success convLink">Submit</button>
  <div class="form-group">
    <label for="extText">Результат</label>
    <textarea rows="10" cols="50" id="extText" class="form-control"></textarea>
  </div>
</div>