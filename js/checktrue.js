
$(function(){





//正答数を確認
function correct(){
    let total = [];
    let checkAnswer = [];
    const $submitAlert = document.getElementById('sumit__alert');
    const listnum = document.getElementById("checktrue__inputs--list").childElementCount;
    for(i = 0; i < listnum ;i++){
        const is = i + 1;
        const checkIdnum = 'check' + is;
        let $id = document.getElementById(checkIdnum);
        let answer = $('[name=' + checkIdnum + ']:checked').length;
        const value = Number($("input[name='" + checkIdnum + "']:checked").val()) ;
        if (answer === 0) {
            $id.classList.add("error");
        }else{
            $id.classList.remove("error");
        }
        checkAnswer.push(answer);
        total.push(value);
    }
    let checked = checkAnswer.reduce(function(sum, element){
        return sum + element;
      }, 0);


    if(checked !== listnum){
        $submitAlert.classList.add("active");
        return false;
    }else{
        $submitAlert.classList.remove("active");
    }
    let goukei = total.reduce(function(sum, element){
        return sum + element;
      }, 0);
    
      if(goukei >= 19){
        location = '/truefalse-result1/';

    }else if(goukei >= 15){
        location = '/truefalse-result2/';

    }else if(goukei >= 10){
        location = '/truefalse-result3/';
    }else if(goukei >= 5){
        location = '/truefalse-result4/';
    }else{
        location = '/truefalse-result5/';
    }
}


    $('#submitBtn').on('click', function() {
        correct();
    });

});
