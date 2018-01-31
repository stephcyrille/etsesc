$(window).on('scroll', function(){
    var scrollTop = $(this).scrollTop()
    if($(window).scrollTop()){
        $('nav').addClass('noir')
        $('nav').removeClass('navbar')
        $('#spec').removeClass('specialite-off')
        $('#spec').addClass('specialite-on')
    } else{
        $('nav').removeClass('noir')
        $('nav').addClass('navbar')        
    }
})

var afficherOnglet = function(a) {
    var h3 = a.parentNode
    console.log(h3)
    var div = a.parentNode.parentNode.parentNode.parentNode
    console.log(div)
    
    if(h3.classList.contains('.active')){
        return false
    }

    // On retire la classe active de l'onglet actif
    div.querySelector('.tab .active').classList.remove('active')
    // On ajoute la classe active a l'objet courent
    h3.classList.add('active')

    //on retire la classe active du contenu bloc onglet
    div.querySelector('.tab-content.active').classList.remove('active')
    //console.log(a)
    // On ajoute active au contenu correspondant au click
    console.log(div.querySelector(a.getAttribute('href').toString()))
    div.querySelector(a.getAttribute('href').toString()).classList.add('active')
}

var tabs = document.querySelectorAll('.tab h3 a');
for(var i=0; i < tabs.length; i++){
    tabs[i].addEventListener('mouseover', function (e){
        afficherOnglet(this)
    })
}

// Recuperation Hash
var hash = window.location.hash
var a = document.querySelector('a[href="' + hash + '"]')
if(a !== null && !a.parentNode.classList.contains('active')){

}








/*
$('.tab h3 a').click(function(e) {
    var $a = $(this);
    var $h3 = $a.parent();
    if($h3.hasClass('active')){
        return false
    }

    $h3.siblings('.active').removeClass('active');
    $h3.addClass('active');

    var $trg = $($a);
    var $target = $trg.attr('href');
    console.log($trg);
    console.log($target);
    
    
    $trg.siblings(':visible').fadeOut(500, function() {
        $target.fadeIn(500)
    })
    
})
*/