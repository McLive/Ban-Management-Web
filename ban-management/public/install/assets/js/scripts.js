function submitForm() {
	if(checkForm())
		document.form.submit();
}

function checkForm() {
	return checkInput($("[name=hostname]")) && checkInput($("[name=username]")) && checkInput($("[name=database]")) && 
	checkInput($("[name=location]")) && checkURL($("[name=location]")) && checkInput($("[name=locale]")) && checkInput($("[name=key]"));
}

function checkInput(e) {
	if(e.val() == null || e.val() == "") {
		setError(e, "Required.");
		return false;
	}
	remError(e);
	return true;
}

function checkURL(e) {
  var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
  '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
  '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
  '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
  '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
  '(\\#[-a-z\\d_]*)?$','i'); // fragment locator

  if(!pattern.test(e.val()) && e.val().indexOf('localhost') === -1) {
	setError(e, "Not a valid URL.");
    return false;
  } else {
	remError(e);
    return true;
  }
}

function setError(e, text) {
	e.parent().removeClass("has-success");
	e.parent().addClass("has-error");
	e.tooltip({
		title: text,
		trigger: 'manual'
	});
	e.tooltip('show');
	e.focus();
}

function remError(e) {
	e.parent().removeClass("has-error");
	e.parent().addClass("has-success");
	e.tooltip('destroy');
}