        const form = {
            from: document.getElementById('FromPlace'),
            to: document.getElementById('ToPlace'),
            messages: document.getElementById('form-messages0'),
            card: document.getElementById('buscard')
        };
        function ChooseBus(number){
            document.getElementById("busnumber").innerHTML = number;
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

          
            const requestData = `busnum=${number}`;
            request.open('post', 'Control/LoadRoad.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        };

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                form.card.style.display = 'block';
                while (form.from.firstChild){
                    form.from.removeChild(form.from.firstChild);
                }
                responseObject.frPlace.forEach((message) =>{
                    const option = document.createElement('option');
                    option.textContent = message;
                    form.from.appendChild(option);
                });
                while (form.to.firstChild){
                    form.to.removeChild(form.to.firstChild);
                }
                responseObject.toPlace.forEach((message1) =>{
                    const option = document.createElement('option');
                    option.textContent = message1;
                    form.to.appendChild(option);
                });
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }
                responseObject.messages.forEach((message) => {
                    const li = documenst.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });
                form.messages.style.display = "block";
            }
        }