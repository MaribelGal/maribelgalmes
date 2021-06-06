export let renderOnOffSwitch = () => {

    let onOffSwitch = document.getElementById('onoffswitch');

    if(onOffSwitch ){

        onOffSwitch.addEventListener("click", () => {

            if(onOffSwitch.value == "true"){
                onOffSwitch.value = "false";
            }else{
                onOffSwitch.value = "true";
            }
        });
    }
}