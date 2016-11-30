function getHeroInformationByName(username, mode){
  var results = document.getElementById("loaderPlacement")
  username = username.replace("#","-")
  var loader = document.createElement("div")
  loader.setAttribute("class","loader")
  var loading = document.createElement("b")
  loading.setAttribute("id","loading")
  results.appendChild(loader)
  results.appendChild(loading)
  console.log("searching for username="+username)
  API.getDetailedStats(username, API.PLATFORM.PC, API.REGION.USA, API.MODE.QUICK, function (json_data){API.post("byname.php",json_data, {"uname": username})})
}
