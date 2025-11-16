<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Strategy Game Task Management System</title>
        
        <div id="myStyles"> 
            <link rel="stylesheet" href="SystemDesignProjectCSS.css">
        </div>
       
    </head>

    <body class="bodyContainer">

    <!--Create a container for the header-->
        <div class="headerContainer" id="headerContainer">
            
        <!--Create the header-->
            <div class="headerContent" id="pageHeader">
                <h1>Strategy Management</h1>

                <div class="headerButtons">
                    <!--Sign Up button and form-->
                    <button onclick="openSignUpForm()" class="signUpButton" id="signUp">Sign Up</button>
                        
                        <div class="signUpPopUp" id="signUpForm">
                            <form class="form-container" id="signUpFormElement">
                                <h1>Sign Up</h1>

                                <!--Text boxes-->
                                <label for="email">Email</label>
                                <input type="text" placeholder="Enter email" name="email" required>
                                    
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter Password" name="password"required>

                                <label for="password">Re-enter Password</label>
                                <input type="password" placeholder="Re-enter Password" name="confirm_password" required>

                                <!--buttons-->

                                <button type="submit">Sign Up</button>
                                <button type="button" id="closeSignUpBtn" onclick="closeSignUpForm()">Close</button>
                            </form>
                        </div>
                    
                    
                    <!--Log in button and form-->

                    <button onclick="openLogInForm()" class="logInButton" id="logIn">Log In</button><!--Log in button-->

                        <div class="logInPopUp" id="logInForm"><!--Log in form-->
                            <form class="form-container" id="logInFormElement">
                                <h1>Login</h1>

                                <!--Text boxes-->
                                <label for="email">Email</label>
                                <input type="text" placeholder="Enter email" name="logInEmail" required>

                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter Password" name="logInPassword"required>

                                <!--Buttons-->
                                <button type="submit">Login</button>
                                <button type ="button" id="closeLogInBtn" onclick="closeLogInForm()">Close</button>
                                
                            </form>
                        </div><!--End Log in button-->

                        <span class="welcome-text" id="welcomeText"></span>

                        <div id="responseMessage"></div>
                </div>
                
            </div>
                
        </div>
        
        <hr>
         
         <div class="mainContent">
            
            <div class="boardTitleHeader"><!--Create the board title header-->
                <div class="boardTitleHeaderWrap"><!--Wrap the board title header--> 
                    
                <span class="boardTitleHeaderLeft">
                    <p>hella</p>
                </span>
                    
                <span class="boardTitleHeaderRight">
                    <button type ="button" onclick="openBoardOptionsForm()" class="boardTitleHeaderOptionsButton">Board Options</button>
                        <div class="boardOptionsPopUp" id="boardOptionsForm"><!--Board Options Form start-->
                            <form method="post" class="boardOptionsForm-Container">
                                <h1>Edit board</h1>

                                <label for="boardName">Board Name</label>
                                <input type="text" placeholder="Enter the new board name" name="boardName">

                                <input type="radio" id="privateVisibility" name="boardPrivacy" value="private">
                                <label for="privateVisibility">Private</label>

                                <input type="radio" id="publicVisibility" name="boardPrivacy" value="Public">
                                <label for="publicVisibility">Public</label>

                                <button type="submit" id="confirmBoardOptionsBtn" onclick="processBoardOptionsForm()">Edit Board</button>
                                <button type ="button" id="closeBoardOptionsBtn" onclick="closeBoardOptionsForm()">Close</button>
                            </form>

                        </div>
                </span>

                </div><!--end wrap the board title header-->
            </div><!--end the board title header-->
            
            <div class="boardContent">
                <div class="leftContent" id="leftContent"> 
                        
                        <button onclick="openNewBoardForm()" class="newBoardButton" id="newBoardButton">New Board</button><!--New Board button-->
                            <div class="newBoardPopUp" id="newBoardForm"><!--New board form-->
                                <form method="post" class="newBoardForm-Container">
                                    <h1>Create a new board</h1>

                                    <label for="boardName">Board Name</label>
                                    <input type="text" placeholder="Enter the new board name" name="boardName" required>

                                    <input type="radio" id="privateVisibility" name="boardPrivacy" value="private">
                                    <label for="privateVisibility">Private</label>

                                    <input type="radio" id="publicVisibility" name="boardPrivacy" value="Public">
                                    <label for="publicVisibility">Public</label>

                                    <button type="submit" id="createBoardBtn">Create Board</button>
                                    <button type ="button" id="closeNewBoardBtn" onclick="closeNewBoardForm()">Close</button>

                                </form>

                                
                            </div><!--End board form div-->
                        
                        
                        

                        
                        
                        
                </div>

                <div class="rightContentDiv" id="rightContent">
                   
                    <button onclick="openNewCardForm()" class="newCardButton" id="newCardButton">New Card</button><!--New Card button-->
                       
                        
                    <ol class="cardOLFormatting" id="cardsContainer"><!--Example Card Structure-->
                        
                        <li class="alignCards"><!--Card 1-->
                            <div id="defaultCard"><!--Card 1 container-->
                                <div class="cardHeader"><!--Card header-->
                                    <h2>Default Card 1</h2>
                                    <button onclick="openEditCardForm()" class="editCardButton" id="editCardButton">Edit Card</button><!--Edit Card button-->


                                </div><!--End Card Header-->

                                <hr>

                                <div class="listsContainer" id="theListsContainer_defaultCard"><!--Card content-->
                                    
                                    <button onclick="openNewListItemForm('theListsContainer_defaultCard')" class="newListItemButton" id="newListItemButton">Add a list item</button><!--Create a new list item-->
                                </div>

                            </div>
                        </li><!--End Card 1-->
                    </ol>
                    
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "systemdesignproject";

                        //establish connection to database
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        //check connection
                        if ($conn->connect_error) {
                            die("Connection failed". $conn->connect_error);
                        } else {
                            echo "successful connection!";
                        }
                    ?>


                    <!--These divs are for the forms-->
                    <!------------------------------------------------------------->
                    <!------------------------------------------------------------->
                    <!------------------------------------------------------------->
                    <!------------------------------------------------------------->
                    <!------------------------------------------------------------->
                    <!------------------------------------------------------------->
                    
                    <!--------------New List item pop up form---------------------->
                    



                </div>

                <div class="newCardPopUp" id="newCardForm"><!--New Card form-->
                            <form action="null" class="newCardForm-Container">  
                                <h1>Create a new card</h1>

                                <label for="cardName">Card Name</label>
                                <input type="text" placeholder="Enter the new card name" name="cardName" required>

                                <label for="cardDescription">Card Description</label>
                                <input type="text" placeholder="Enter the new card description" name="cardDescription">

                                <button type="submit" id="createNewCardBtn" onclick = "processNewCardForm()">Create Card</button>
                                <button type ="button" id="closeNewCardBtn" onclick="closeNewCardForm()">Close</button> 
                            </form>

                        </div><!--End board form div-->

            </div>


            <div class="newListItemPopUp" id="newListItemForm" style="display:none;"><!--New List Item form-->
                                            <form class="newListItemForm-Container">  
                                                <h1>New List Item</h1>

                                                    <label for="listItemName">Item Name</label>
                                                    <input type="text" placeholder="Enter the name" name="listItemName" required>

                                                    <label for="listItemDescription">Item Description</label>
                                                    <input type="text" placeholder="Enter the description" name="listItemDescription">

                                                    <button type="submit">Create Item</button>
                                                    <button type ="button" id="closeNewListItemBtn" onclick="closeNewListItemForm()">Close</button> 
                                            </form>

                    </div><!--End new list item form div-->

            <div class="editCardPopUp" id="editCardForm" style="display:none;"><!--New Card form-->
                                            <form action="null" class="editCardForm-Container">  
                                                <h1>Edit card</h1>

                                                    <label for="cardName">Card Name</label>
                                                    <input type="text" placeholder="Enter the new card name" name="cardName">

                                                    <label for="cardDescription">Card Description</label>
                                                    <input type="text" placeholder="Enter the new card description" name="cardDescription">

                                                    <label for="cardColor">Select the card's color:</label>
                                                    <input type="color" id="newCardColor" name="newCardColor" value="#ff0000">

                                                    <button type="submit">Edit Card</button>
                                                    <button type ="button" id="closeEditCardBtn" onclick="closeEditCardForm()">Close</button> 
                                            </form>

                                        </div><!--End edit card form div-->
    

            <!--JavaScript to make forms open/close-->
        <script>
            
            const boards = {};
            const cards = {};
            const lists = {};
            let currentOpenBoardID = null;
            let currentOpenCardID = null;


            //Classes

            /////////////////////////////////////////////
            ///////////////////////////////////////////// BOARDS
            /////////////////////////////////////////////

            class Board{
                //Constructor
                constructor (id, boardName, boardVisibility){
                    this.id = id;
                    this.boardName = boardName;
                    this.boardVisibility =boardVisibility;
                }
                
                getDetails() {
                    return `${this.boardName} (${this.boardVisibility})`;
                }

                //This function should allow us to click a board div in leftContent and display its contents in rightContent
                openBoard() {
                    currentOpenBoardID = this.id;
                    console.log("Opening board:", this.id, this.boardName);

                    const newCardButton = document.getElementById("newCardButton");
                    const rightContent = document.getElementById("rightContent");
                    rightContent.innerHTML = "";
                    rightContent.appendChild(newCardButton);

                    const boardTitle = document.createElement("h2");
                    boardTitle.textContent = `Board: ${this.boardName}`;
                    rightContent.appendChild(boardTitle);

                    const cardsContainer = document.createElement("ol");
                    cardsContainer.id = `cardsContainer_${this.id}`;
                    rightContent.appendChild(cardsContainer);

                    // Fetch cards for this board
                    fetch(`GetCards.php?BoardID=${this.id}`)
                        .then(response => response.json())
                        .then(cards => {
                            cards.forEach(c => {
                                addCard(c.CardName, c.CardDescription, c.CardID); // pass real CardID
                                fetch(`GetLists.php?CardID=${c.CardID}`)
                                    .then(response => response.json())
                                    .then(lists => {
                                        lists.forEach(l => addListItem(l.ListName, l.ListDescription, `listsContainer_card_${c.CardID}`));
                                    })
                                    .catch(err => console.error("Error loading lists:", err));
                            });
                        })
                        .catch(err => console.error("Error loading cards:", err));
                }



            }

            //add a new board function
            function addBoard(boardName, boardVisibility, boardID) {
                    let newBoard = new Board(boardID, boardName, boardVisibility);
                    boards[boardID] = newBoard;

                    const newBoardDiv = document.createElement("div");
                    newBoardDiv.className = "boardsListItem";
                    newBoardDiv.id = boardID;
                    newBoardDiv.textContent = `Name: ${boardName}`;
                    newBoardDiv.onclick = () => newBoard.openBoard();

                    document.getElementById("leftContent").appendChild(newBoardDiv);
            }


            function processNewBoardForm(event) {
                event.preventDefault();

                let form = document.querySelector(".newBoardForm-Container");
                let nameInput = form.querySelector("input[name='boardName']");
                let visibilityInput = form.querySelector("input[name='boardPrivacy']:checked");

                let name = nameInput.value.trim();
                let visibility = visibilityInput ? visibilityInput.value : null;

                if (!name || !visibility) {
                    alert("Please enter a board name and select visibility.");
                    return;
                }

                let formData = new FormData();
                formData.append("boardName", name);
                formData.append("boardPrivacy", visibility);

                fetch("CreateBoard.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(message => {
                    alert(message);
                    addBoard(name, visibility);
                    closeNewBoardForm();
                })
                .catch(error => console.error("Error:", error));
            }


            /////////////////////////////////////////////
            ///////////////////////////////////////////// CARDS
            ///////////////////////////////////////////// 

            class Card{
                constructor(id, cardName, cardDescription){
                    this.id = id;
                    this.cardName =cardName;
                    this.cardDescription =cardDescription;
                }

                getCardDetails() {
                    return `${this.cardName} (${this.cardDescription})`;
                }

                displayCard(){
                    //do something
                }
            }

            function addCard(cardName, cardDescription, cardID = null) {
                const realCardID = cardID ? `card_${cardID}` : `card_${Date.now()}`;
                let newCard = new Card(realCardID, cardName, cardDescription);
                cards[realCardID] = newCard;

                const newCardDiv = document.createElement("div");
                newCardDiv.className = "alignCards";
                newCardDiv.id = realCardID;

                let cardTitleElement = document.createElement("h2");
                cardTitleElement.textContent = cardName;

                let cardDescriptionElement = document.createElement("p");
                cardDescriptionElement.textContent = cardDescription;

                const listsContainer = document.createElement("div");
                const listContainerID = `listsContainer_${realCardID}`;
                listsContainer.className = "listsContainer";
                listsContainer.id = listContainerID;

                const editCardButton = document.createElement("button");
                editCardButton.textContent = "Edit Card";
                editCardButton.className = "editCardButton";
                editCardButton.onclick = () =>{
                    currentOpenCardID = realCardID;
                    openEditCardForm(currentOpenCardID);
                };

                const newListButton = document.createElement("button");
                newListButton.textContent = "Add a list item";
                newListButton.className = "newListItemButton";
                newListButton.onclick = () => {
                    currentOpenCardID = cardID; //  <-- use numeric DB ID if available
                    openNewListItemForm(listContainerID);
                };

                listsContainer.appendChild(newListButton);
                newCardDiv.appendChild(cardTitleElement);
                newCardDiv.appendChild(editCardButton);
                newCardDiv.appendChild(cardDescriptionElement);
                newCardDiv.appendChild(listsContainer);

                const boardContainerId = `cardsContainer_${currentOpenBoardID}`;
                const cardsContainer = document.getElementById(boardContainerId);
                if (cardsContainer) {
                    cardsContainer.appendChild(newCardDiv);
                } else {
                    console.error("No card container found for board:", boardContainerId);
                }

                return realCardID;
            }



            function processNewCardForm(event) {
                event.preventDefault();

                const cardForm = document.querySelector(".newCardForm-Container");
                const cardNameInput = cardForm.querySelector("input[name='cardName']");
                const cardDescriptionInput = cardForm.querySelector("input[name='cardDescription']");

                let cName = cardNameInput.value.trim();
                let cDesc = cardDescriptionInput ? cardDescriptionInput.value : '';

                if (!cName) {
                    alert("Please enter a card name.");
                    return;
                }

                let formData = new FormData();
                formData.append("BoardID", currentOpenBoardID);
                formData.append("cardName", cName);
                formData.append("cardDescription", cDesc);

                fetch("CreateCard.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json()) // Expect JSON now
                .then(data => {
                    if (data.success) {
                        console.log(data.message);
                        addCard(cName, cDesc, data.CardID); // Use real DB CardID
                        closeNewCardForm();
                    } else {
                        console.error("Server error:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Fetch error:", error));

            }




            /////////////////////////////////////////////
            ///////////////////////////////////////////// LISTS
            /////////////////////////////////////////////
           
            class ListItem{
                constructor (id, listItemName, listItemDescription){
                    this.id = id;
                    this.listItemName = listItemName;
                    this.listItemDescription = listItemDescription;
                }

                getListItemDetails(){
                     return `${this.listItemName} (${this.listItemDescription})`;
                }

                displayList(){
                    //do something
                }
            }

            function addListItem(listItemName, listItemDescription, targetContainerID){
                const listItemID = `listItem_${Date.now()}`;

                let newListItem = new ListItem (listItemID, listItemName, listItemDescription);
                lists[listItemID] = newListItem;

                const newListEntry = document.createElement("li");
                newListEntry.className = "listsItem";
                newListEntry.textContent = `Item: ${listItemName} \r\n`;
                newListEntry.textContent += `Description: ${listItemDescription}`;

                const targetContainer =document.getElementById(targetContainerID);

                if (targetContainer) {
                    targetContainer.appendChild(newListEntry);
                }

            }

            function processNewListItemForm(event){
                event.preventDefault();

                const listItemForm =document.querySelector(".newListItemForm-Container");
                const listItemNameInput = listItemForm.querySelector("input[name='listItemName']");
                const listItemDescriptionInput = listItemForm.querySelector("input[name='listItemDescription']");

                let lname = listItemNameInput.value.trim();
                let ldesc = listItemDescriptionInput ? listItemDescriptionInput.value: '';

                if (!lname) {
                    alert("Please enter a list item name.");
                    return;
                }

                let formData = new FormData();
                formData.append("CardID", currentOpenCardID);
                formData.append("ListName", lname);
                formData.append("ListDescription", ldesc);

                fetch("CreateList.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(message => {
                    console.log(message);
                    addListItem(lname, ldesc, currentTargetListContainer);
                    closeNewListItemForm();
                })
                .catch(error => console.error("Error creating list:", error));

                closeNewListItemForm();
            }


            /////////////////////////////////////////////
            /////////////////////////////////////////////
            /////////////////////////////////////////////


            function User(){

            }

            /////////////////////////////////////////////
            /////////////////////////////////////////////
            /////////////////////////////////////////////
            //            Process edit board                 
            /////////////////////////////////////////////
            /////////////////////////////////////////////

            function processBoardOptionsForm(event){
                event.preventDefault();

                //add code to get new name and visibility
                //pass new name and visibility to existing board
            }


            /////////////////////////////////////////////
            /////////////////////////////////////////////
            /////////////////////////////////////////////

            let currentTargetListContainer = null;
            let currentTargetCardContainer = null;
            let currentTargetBoardContainer = null;

            function openLogInForm(){
                //If opening the log in form, close the sign up form
                document.getElementById("logInForm").style.display = "block";
                document.getElementById("signUpForm").style.display = "none";
                document.getElementById("newBoardForm").style.display ="none";
            }

            function closeLogInForm(){
                document.getElementById("logInForm").style.display = "none";
            }

            function openSignUpForm(){
                //If opening the sign up form, close the log in form
                document.getElementById("signUpForm").style.display = "block";
                document.getElementById("logInForm").style.display = "none";
                document.getElementById("newBoardForm").style.display ="none";
            }

            function closeSignUpForm(){
                document.getElementById("signUpForm").style.display = "none";
            }

            function openNewBoardForm(){
                document.getElementById("newBoardForm").style.display = "block";
                document.getElementById("signUpForm").style.display = "none";
                document.getElementById("logInForm").style.display = "none";
            }

            function closeNewBoardForm(){
                document.getElementById("newBoardForm").style.display ="none";
            }

            function openNewCardForm(){
                document.getElementById("newCardForm").style.display = "block";
                document.getElementById("signUpForm").style.display = "none";
                document.getElementById("logInForm").style.display = "none";
                document.getElementById("newBoardForm").style.display ="none";
            }

            function closeNewCardForm(){
                document.getElementById("newCardForm").style.display="none";
            }

            function openEditCardForm(containerID){
                currentTargetCardContainer = containerID;
                document.getElementById("editCardForm").style.display = "block";
            }

            function closeEditCardForm(){
                document.getElementById("editCardForm").style.display = "none";
            }

            function openNewListItemForm(containerID){
                currentTargetListContainer = containerID;
                document.getElementById("newListItemForm").style.display = "block";
            }

            function closeNewListItemForm(){
                document.getElementById("newListItemForm").style.display = "none";
            }

            function openBoardOptionsForm(){
                document.getElementById("boardOptionsForm").style.display = "block";
            }

            function closeBoardOptionsForm(){
                document.getElementById("boardOptionsForm").style.display = "none";
            }


            /////////////////////////////////////////////
            /////////////////////////////////////////////
            /////////////////////////////////////////////
            //            Form inputs to database               
            /////////////////////////////////////////////
            /////////////////////////////////////////////
            
            function submitSignUpAjax (formID, endpoint, responseContainerID){
                 let form = document.getElementById(formID);
                 let responseContainer = document.getElementById(responseContainerID);
                 const headerContainer = document.getElementById("headerContainer");

                form.onsubmit = function(e) {
                    e.preventDefault();

                    let formData = new FormData(form);

                    fetch(endpoint, {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data=>{
                        const welcomeTextSpan = document.getElementById("welcomeText");
                        welcomeTextSpan.textContent = `Hello, ${data}`;
                        document.getElementById("signUp").style.display = "none";
                        document.getElementById("logIn").style.display = "none";
                    })
                    .catch(error=>{
                        responseContainer.innerHTML = "An error occurred.";
                        console.error("Error:", error);
                    });
                };
            }

            function submitLogInAjax(formID, endpoint, responseContainerID){
                let form = document.getElementById(formID);
                let responseContainer = document.getElementById(responseContainerID);
                const headerContainer = document.getElementById("headerContainer");

                form.onsubmit = function(e) {
                    e.preventDefault();

                    let formData = new FormData(form);

                    fetch(endpoint, {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data=>{
                         // update welcome message
                        document.getElementById("welcomeText").textContent = data;

                        // hide login/signup
                        document.getElementById("signUp").style.display = "none";
                        document.getElementById("logIn").style.display = "none";

                        // show board container (if hidden)
                        const leftContent = document.getElementById("leftContent");
                        leftContent.style.display = "block";

                        // show the "New Board" button
                        const newBoardButton = document.getElementById("newBoardButton");
                        if (newBoardButton) {
                            newBoardButton.style.display = "inline-block";
                        }

                        // now load user boards
                        fetch("GetBoards.php")
                            .then(response => response.json())
                            .then(boards => {
                                // remove ONLY old board entries (not the button)
                                const existingBoards = leftContent.querySelectorAll(".boardsListItem");
                                existingBoards.forEach(el => el.remove());

                                // append boards below the button
                                boards.forEach(b =>{ 
                                    console.log("Loaded board:", b.BoardID, b.BoardName); // 🧩 debug
                                    addBoard(b.BoardName, b.BoardPrivacy, b.BoardID);
                                });
                            })
                            .catch(err => console.error("Error loading boards:", err));
                    })
                    .catch(error=>{
                        responseContainer.innerHTML = "An error occurred.";
                        console.error("Error:", error);
                    });
                };
            }


            submitSignUpAjax("signUpFormElement", "InsertSignIn.php", "headerContainer");

           
            submitLogInAjax("logInFormElement", "CheckLogIn.php", "headerContainer");
            

            document.querySelector(".newBoardForm-Container").addEventListener("submit", processNewBoardForm);
            document.querySelector(".newCardForm-Container").addEventListener("submit", processNewCardForm);
            document.querySelector(".newListItemForm-Container").addEventListener("submit", processNewListItemForm);

        </script>
    
    
    </body>

</html>