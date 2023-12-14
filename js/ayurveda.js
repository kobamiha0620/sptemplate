window.onload = function() {
	//チェックボックスを取得する
	const vita = document.getElementsByClassName("vita");
	const pitta = document.getElementsByClassName("pitta");
	const kappa = document.getElementsByClassName("kappa");
	//カウントボタンを取得する
	const btn = document.getElementById("btn");

    const vitaCon = document.getElementById('consequence__vita');
    const pittaCon = document.getElementById('consequence__pitta');
    const kappaCon = document.getElementById('consequence__kappa');

	//チェック済みのチェックボックスの数を返す
	const getCheckedCount = () => {

	    let count = 0;

	    for (let i = 0; i < vita.length; i++) {
	        if (vita[i].checked) {
	            count++;
	        }
	    }
        vitaCon.innerHTML = '<span>'+ count + '</span>';

        let count_p = 0;
	    for (let i = 0; i < pitta.length; i++) {
	        if (pitta[i].checked) {
	            count_p++;
	        }
	    }
        pittaCon.innerHTML = '<span>'+ count_p + '</span>';

        let count_k = 0;
	    for (let i = 0; i < kappa.length; i++) {
	        if (kappa[i].checked) {
	            count_k++;
	        }
	    }
        kappaCon.innerHTML = '<span>'+ count_k + '</span>';
	};

	//ボタンをクリックした時に「getCheckedCount()」を呼び出す
	btn.addEventListener("click", getCheckedCount, false);
}