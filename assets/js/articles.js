function selectChange(e){
    if(window.location.search == ""){
        window.location.href += '?sort='+e.value
    }else{
        let params = new URLSearchParams(window.location.search)
        if(params.has('sort')){
            params.set('sort', e.value)
        }else{
            params.append('sort',e.value)
        }
        window.location.href =  window.location.origin+window.location.pathname+"?"+params.toString();
        
    }
    
}