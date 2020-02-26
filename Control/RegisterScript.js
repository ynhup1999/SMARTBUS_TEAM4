$(document).ready(function(){
        const form = {
            username: document.getElementById('username'),
            password: document.getElementById('password'),
            repassword: document.getElementById('repassword'),
            name: document.getElementById('name'),
            submit: document.getElementById('btn-submit'),
            messages: document.getElementById('form-messages')
        };
        $("#btn-register").click(function(){
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

          
            const requestData = `username=${form.username.value}&password=${form.password.value}&repassword=${form.repassword.value}&name=${form.name.value}`;

            request.open('post', 'Control/UserRegister.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                var head = 'User.php?ID=';
                var last = responseObject.ID;
                var next = '&name=';
                var next2 = responseObject.Name;
                var first = head.concat(last);
                var second = next.concat(next2);
                location.href = first.concat(second);
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