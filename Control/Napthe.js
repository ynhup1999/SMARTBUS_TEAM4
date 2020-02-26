$(document).ready(function(){
        const form = {
            iduser: document.getElementById('userID'),
            digit: document.getElementById('digitnumber'),
            messages: document.getElementById('form-messages0')
        };
        $("#Napthe_btn").click(function(){
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

          
            const requestData = `iduser=${form.iduser.textContent}&digitnumber=${form.digit.value}`;
            request.open('post', 'Control/UpdateMoney.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = 'user.php' + location.search;
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