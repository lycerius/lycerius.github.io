var API                  = {}
API.URL                  = "https://api.lootbox.eu"

API.PLATFORM             = {}
API.PLATFORM.PC          = "pc"
API.PLATFORM.XBOX        = "xbl"
API.PLATFORM.PLAYSTATION = "psn"

API.REGION               = {}
API.REGION.USA           = "us"
API.REGION.KOREA         = "kr"
API.REGION.EUROPE        = "eu"
API.REGION.CHINA         = "cn"
API.REGION.GLOBAL        = "global"

API.MODE                 = {}
API.MODE.COMP            = "competitive"
API.MODE.QUICK           = "quickplay"

API.HEROS               = {}

API.HEROS.TORB          = "Torbjoern"
API.HEROS.LUCIO         = "Lucio"
API.HEROS.SOLDIER       = "Soldier76"
API.HEROS.GENJI         = "Genji"
API.HEROS.MCCREE        = "McCree"
API.HEROS.PHARA         = "Pharah"
API.HEROS.REAPER        = "Reaper"
API.HEROS.SOMBRA        = "Sombra"
API.HEROS.TRACER        = "Tracer"
API.HEROS.BASTION       = "Bastion"
API.HEROS.HANZO         = "Hanzo"
API.HEROS.JUNKRAT       = "Junkrat"
API.HEROS.MEI           = "Mei"
API.HEROS.WIDOW         = "Widowmaker"
API.HEROS.DVA           = "DVa"
API.HEROS.REIN          = "Reinhardt"
API.HEROS.ROAD          = "Roadhog"
API.HEROS.WINSTON       = "Winston"
API.HEROS.ZARYA         = "Zarya"
API.HEROS.ANA           = "Ana"
API.HEROS.MERCY         = "Mercy"
API.HEROS.SYM           = "Symmetra"
API.HEROS.ZEN           = "Zenyatta"

API.basicURL = function(tag, platform, region){
  return API.URL+"/"+encodeURI(platform)+"/"+encodeURI(region)+"/"+encodeURI(tag)+"/"
}

API.getDetailedStats = function(tag, platform, region, mode, listener){
  $.getJSON(API.basicURL(tag,platform,region)+encodeURI(mode)+"/allHeroes/", listener)
}

API.getProfile = function(tag, platform, region, listener){
  $.getJSON(API.URL + "/"+encodeURI(platform)+"/"+encodeURI(region)+"/"+encodeURI(tag)+"/profile", listener)
}

API.getStatsForHeros = function(tag, platform, region, mode, heros, listener){
  var basicURL = API.basicURL(tag,platform,region)+encodeURI(mode)+"/hero/" + encodeURI(heros.join()) + "/"
  $.getJSON(basicURL,listener)
}

API.post = function(location, post, get){
  var form = '';
  if(get != null){
    location += "?"
    $.each( get, function(key, value){
      location += key+"="+encodeURI(value)+"&"
    })
    location = location.substring(0,location.length-1)
  }

  $.each( post, function( key, value ) {
      //value = value.split('"').join('\"')
      form += '<input type="hidden" name="'+key+'" value="'+value+'">';
    });
    $('<form action="' + location + '" method="POST">' + form + '</form>').appendTo($(document.body)).submit();
}
