$(document).ready(function(){
        const form = {
            iduser: document.getElementById('userID'),
            idbus: document.getElementById('busnumber'),
            frP: document.getElementById('FromPlace'),
            toP: document.getElementById('ToPlace'),
            messages: document.getElementById('form-messages1')
        };
        $("#BookBus").click(function(){
            const request = new XMLHttpRequest();
            request.onload = () => {
                let responseObject = null;
                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error('Could not parse JSON!');
                }
                if (responseObject) {
                    handleResponse(responseObject);
                }
            };

          
            const requestData = `iduser=${form.iduser.textContent}&idbus=${form.idbus.textContent}&frP=${form.frP.value}&toP=${form.toP.value}`;

            request.open('post', 'Control/DatXe.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = 'waiting.php?ID='+ responseObject.id + '&name=' + responseObject.name + '&idbus=' + responseObject.idbus;
            } else {
                 while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }
                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });
                form.messages.style.display = "block";
            }
        }
    }); 