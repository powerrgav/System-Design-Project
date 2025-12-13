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
                    <p style="color:white;">Boards and content below</p>
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

                                <div class="boardGameContainer">
                                    <label>Select Game:</label>
                                    <div>
                                        <label>
                                            <input type="radio" name="editBoardGame" value="none">
                                            None
                                        </label>
                                        <label>
                                            <input type="radio" name="editBoardGame" value="civilization">
                                            Civilization
                                        </label>
                                        <label>
                                            <input type="radio" name="editBoardGame" value="football_manager">
                                            Football Manager
                                        </label>
                                    </div>
                                </div>


                               <button type="submit" id="confirmBoardOptionsBtn">Edit Board</button>
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

                                    <div class="boardGameContainer">
                                        <label>Select Game:</label>
                                        <div>
                                            <label>
                                                <input type="radio" name="boardGame" value="none" checked>
                                                None
                                            </label>
                                            <label>
                                                <input type="radio" name="boardGame" value="civilization">
                                                Civilization
                                            </label>
                                            <label>
                                                <input type="radio" name="boardGame" value="football_manager">
                                                Football Manager
                                            </label>
                                        </div>
                                    </div>


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
                                                    <input type="color" id="newCardColor" name="cardColor" value="#ff0000">

                                                    <button type="submit" id="editCardSubmitButton">Edit Card</button>
                                                    <button type ="button" id="closeEditCardBtn" onclick="closeEditCardForm()">Close</button> 
                                            </form>

                                        </div><!--End edit card form div-->

            <div class="editListPopUp" id="editListForm" style = "display:none;">
                    <form action="null" class="editListItemForm-Container">  
                                                <h1>Edit List Item</h1>

                                                    <label for="listItemName">Item Name</label>
                                                    <input type="text" placeholder="Enter the new item name" name="listItemName">

                                                    <label for="listItemDescription">Item Description</label>
                                                    <input type="text" placeholder="Enter the new item description" name="listItemDescription">

                                                    <button type="submit" id="editListSubmitButton">Edit List</button>
                                                    <button type ="button" id="closeEditListBtn" onclick="closeEditListForm()">Close</button> 
                                            </form>
            </div>


            <div class="logOutButton" id="logOutButton" style="display:none;"><!--Log Out Button-->
                <button onclick="submitLogOut()">Log Out</button>
            </div>

            
    

            <!--JavaScript to make forms open/close-->
        <script>
            
            const boards = {};
            const cards = {};
            const lists = {};
            let currentOpenBoardID = null;
            let currentOpenCardID = null;
            let gameDictionary = {};

            fetch("DataDictionary.json")
            .then(response => response.json())
            .then(data => {
                gameDictionary = data;
                console.log("Game dictionary loaded:", gameDictionary);
            });



            //Classes

            /////////////////////////////////////////////
            ///////////////////////////////////////////// BOARDS
            /////////////////////////////////////////////

            class Board{
                //Constructor
                constructor (id, boardName, boardVisibility, selectedGame="none"){
                    this.id = id;
                    this.boardName = boardName;
                    this.boardVisibility =boardVisibility;
                    this.SelectedGame=selectedGame;
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
            function addBoard(boardName, boardVisibility, boardID, selectedGame="none") {
                    let newBoard = new Board(boardID, boardName, boardVisibility, selectedGame);
                    boards[boardID] = newBoard;

                    console.log("Board "+boardID+ " has game " + selectedGame)

                    let newBoardDiv = document.createElement("div");
                    newBoardDiv.className = "boardsListItem";
                    newBoardDiv.id = boardID;
                    newBoardDiv.textContent = `Name: ${boardName}`;

                    let delBoardButton = document.createElement("button");
                    delBoardButton.textContent = "Delete Board";
                    delBoardButton.className = "editCardButton";
                    
                    newBoardDiv.appendChild(delBoardButton);
                    newBoardDiv.onclick = () => newBoard.openBoard();

                    delBoardButton.onclick = (e) => {
                        e.stopPropagation(); // IMPORTANT

                        if (!confirm("Delete this board?")) return;

                        let formData = new FormData();
                        formData.append("BoardID", boardID);

                        fetch("DeleteBoard.php", {
                            method: "POST",
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                document.getElementById(boardID).remove();
                                delete boards[boardID];
                                document.getElementById("rightContent").innerHTML = "";
                            }
                        });
                    };


                    document.getElementById("leftContent").appendChild(newBoardDiv);
            }


            function processNewBoardForm(event) {
                event.preventDefault();

                let form = document.querySelector(".newBoardForm-Container");
                let nameInput = form.querySelector("input[name='boardName']");
                let visibilityInput = form.querySelector("input[name='boardPrivacy']:checked");

                let gameInput = form.querySelector("input[name='boardGame']:checked");
                let selectedGame = gameInput ? gameInput.value : "none";


                let name = nameInput.value.trim();
                let visibility = visibilityInput ? visibilityInput.value : null;

                if (!name || !visibility) {
                    alert("Please enter a board name and select visibility.");
                    return;
                }

                let formData = new FormData();
                formData.append("boardName", name);
                formData.append("boardPrivacy", visibility);
                formData.append("SelectedGame", selectedGame);

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

            function processBoardOptionsForm(event) {
                event.preventDefault();

                if (!currentOpenBoardID) {
                    alert("No board selected.");
                    return;
                }

                let form = document.querySelector(".boardOptionsForm-Container");
                let nameInput = form.querySelector("input[name='boardName']");
                let visibilityInput = form.querySelector("input[name='boardPrivacy']:checked");
                let gameInput = form.querySelector("input[name='editBoardGame']:checked");
                let selectedGame = gameInput ? gameInput.value : null;

                let newName = nameInput.value.trim();
                let newVisibility = visibilityInput ? visibilityInput.value : null;

                if (!newName || !newVisibility) {
                    alert("Please enter a board name and select visibility.");
                    return;
                }

                let formData = new FormData();
                formData.append("BoardID", currentOpenBoardID);
                formData.append("boardName", newName);
                formData.append("boardPrivacy", newVisibility);
                formData.append("SelectedGame", selectedGame);

                fetch("EditBoard.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                         console.log("EditBoard response:", data);
                        // update the board object
                        boards[currentOpenBoardID].boardName = newName;
                        boards[currentOpenBoardID].boardVisibility = newVisibility;

                        // update left panel text
                        let boardDiv = document.getElementById(currentOpenBoardID);
                        boardDiv.textContent = `Name: ${newName}`;

                        // update the title
                        let rightContent = document.getElementById("rightContent");
                        let title = rightContent.querySelector("h2");
                        if (title) title.textContent = `Board: ${newName}`;

                        closeBoardOptionsForm();
                    } else {
                         console.log("EditBoard response:", data);
                        alert(data.message);
                    }
                })
                .catch(err => console.error("Error editing board:", err));
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
            }

            function addCard(cardName, cardDescription, cardID = null) {
                let realCardID = cardID ? `card_${cardID}` : `card_${Date.now()}`;
                let newCard = new Card(realCardID, cardName, cardDescription);
                cards[realCardID] = newCard;

                let newCardDiv = document.createElement("div");
                newCardDiv.className = "alignCards";
                newCardDiv.id = realCardID;

                let newCardHead = document.createElement("div");
                newCardHead.className = "cardHeader";

                let cardTitleElement = document.createElement("h2");
                cardTitleElement.textContent = cardName;

                let cardDescriptionElement = document.createElement("p");
                cardDescriptionElement.textContent = cardDescription;

                let listsContainer = document.createElement("div");
                let listContainerID = `listsContainer_${realCardID}`;
                listsContainer.className = "listsContainer";
                listsContainer.id = listContainerID;

                let editCardButton = document.createElement("button");
                editCardButton.textContent = "Edit Card";
                editCardButton.className = "editCardButton";
                editCardButton.onclick = () =>{
                    currentOpenCardID = realCardID;
                    openEditCardForm(currentOpenCardID);
                };

                let delCardButton = document.createElement("button");
                delCardButton.textContent = "Delete Card";
                delCardButton.className =("editCardButton");
                delCardButton.onclick = () => {
                    if (!confirm("Delete this card?")) return;

                    const numericCardID = realCardID.replace("card_", "");

                    let formData = new FormData();
                    formData.append("CardID", numericCardID);

                    fetch("DeleteCard.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById(realCardID).remove();
                            delete cards[realCardID];
                        } else {
                            alert("Failed to delete card: " + data.message);
                        }
                    })
                    .catch(err => {
                        console.error("Delete card error:", err);
                        alert("Network error deleting card");
                    });
                };



                const newListButton = document.createElement("button");
                newListButton.textContent = "Add a list item";
                newListButton.className = "newListItemButton";
                newListButton.onclick = () => {
                    currentOpenCardID = cardID;
                    openNewListItemForm(listContainerID);
                };

                listsContainer.appendChild(newListButton);
                newCardDiv.appendChild(cardTitleElement);
                newCardDiv.appendChild(newCardHead);
                newCardDiv.appendChild(editCardButton);
                newCardDiv.appendChild(delCardButton);
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

            function processEditCardForm(event){
                event.preventDefault();

                if(!currentOpenCardID){
                    alert("No card selected");
                    return;
                }

                //cardName - type text
                //cardDescription - typw text
                //cardColor - type color
                let editCardForm = document.querySelector(".editCardForm-Container");
                let newCardName = editCardForm.querySelector("input[name='cardName']");
                let newCardDesc = editCardForm.querySelector("input[name='cardDescription']");
                let newCardColor = editCardForm.querySelector("input[name='cardColor']");

                let newCName = newCardName.value.trim();
                let newCDesc = newCardDesc ? newCardDesc.value : '';

                if(!newCName){
                    alert("Please enter a card name a description");
                    return;
                }

                let formData = new FormData();
                formData.append("CardID", currentOpenCardID.replace("card_", ""));
                formData.append("cardName", newCName);
                formData.append("cardDescription", newCDesc);
                formData.append("cardColor", newCardColor.value);

                fetch("EditCard.php",{
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data =>{
                    if(data.success){
                        console.log("EditCard response:", data);

                        //update the card
                        cards[currentOpenCardID].cardName = newCName;
                        cards[currentOpenCardID].cardDescription = newCDesc;

                        let cardDiv = document.getElementById(currentOpenCardID);
                        cardDiv.querySelector("h2").textContent = newCName;
                        cardDiv.querySelector("p").textContent = newCDesc;
                        cardDiv.style.backgroundColor = newCardColor.value;
                        closeEditCardForm();
                    }else{
                        alert(data.message);
                    }
                })
                .catch(err => console.error("Error editing card:", err));
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
            }

            function addListItem(listItemName, listItemDescription, targetContainerID){
                const listItemID = `listItem_${Date.now()}`; // stays for UI

                let newListItem = new ListItem (listItemID, listItemName, listItemDescription);
                lists[listItemID] = newListItem;

                const newListEntry = document.createElement("li");
                newListEntry.className = "listsItem";
                newListEntry.id = `list_${listItemID}`;
                newListEntry.innerHTML = `
                <span class="listName">${listItemName}</span><br>
                <span class="listDescription">${listItemDescription}</span>
                 `;


                let editListButton = document.createElement("button");
                editListButton.textContent = "Edit";
                editListButton.className = "editListButton";
                editListButton.onclick = () =>{
                    let editForm = document.querySelector(".editListItemForm-Container");
                    editForm.dataset.listId = listItemID;
                    openEditListForm();
                }
                
                
                let deleteListButton = document.createElement("button");
                deleteListButton.textContent = "Delete";
                deleteListButton.className = "deleteListButton";
                deleteListButton.onclick = () => {
                    if (!confirm("Delete this list item?")) return;

                    let dbListID = listItemID.replace("listItem_", "");

                    let formData = new FormData();
                    formData.append("ListID", dbListID);

                    fetch("DeleteList.php", {
                        method:"POST",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            newListEntry.remove();
                            delete lists[listItemID];
                        }
                    });
                };


                newListEntry.appendChild(deleteListButton);
                newListEntry.appendChild(editListButton);

                const targetContainer = document.getElementById(targetContainerID);

                if (targetContainer) {
                    targetContainer.appendChild(newListEntry);
                }

            }

            function checkForRecommendations(listItemName) {
                if (!listItemName) return;
                if (!gameDictionary || Object.keys(gameDictionary).length === 0) return;

                const keyword = listItemName.toLowerCase().trim();
                const gamesToCheck = ["civilization", "football_manager"]; // hardcoded list of games

                let text = `Recommendations for "${keyword}":\n\n`;

                let foundAny = false;

                gamesToCheck.forEach(game => {
                    if (gameDictionary[game] && gameDictionary[game][keyword]) {
                        foundAny = true;
                        const recommendations = gameDictionary[game][keyword];
                        text += `${game}:\n`;
                        recommendations.forEach(r => {
                            text += `• ${r}\n`;
                        });
                        text += "\n";
                    }
                });

                if (foundAny) {
                    alert(text);
                } else {
                    alert(`No recommendations found for "${keyword}"`);
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
                    checkForRecommendations(lname);

                    closeNewListItemForm();
                })
                .catch(error => console.error("Error creating list:", error));

                closeNewListItemForm();
            }

            function processEditListForm(event) {
                event.preventDefault();

                let form = event.target;

                let listID = form.dataset.listId;
                let listName = form.querySelector("input[name='listItemName']").value.trim();
                let listDescription = form.querySelector("input[name='listItemDescription']").value.trim();

                if (!listID) {
                    console.error("Missing ListID");
                    return;
                }

                let formData = new FormData();
                formData.append("ListID", listID);
                formData.append("ListName", listName);
                formData.append("ListDescription", listDescription);

                fetch("EditList.php", {
                    method: "POST",
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (!data.success) {
                        throw new Error(data.message);
                    }

                    // update UI
                    const listEl = document.querySelector(`#list_${listID}`);
                    listEl.querySelector(".listName").textContent = listName;
                    listEl.querySelector(".listDescription").textContent = listDescription;

                    closeEditListForm();
                })
                .catch(err => console.error("Edit list error:", err));
            }



            /////////////////////////////////////////////
            /////////////////////////////////////////////
            /////////////////////////////////////////////
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

            function openEditListForm(){
                document.getElementById("editListForm").style.display="block";
            }

            function closeEditListForm(){
                document.getElementById("editListForm").style.display="none";
            }

            function openBoardOptionsForm(){
                document.getElementById("boardOptionsForm").style.display = "block";

                if (!currentOpenBoardID) return;

                const game = boards[currentOpenBoardID].SelectedGame || "none";
                const option = document.querySelector(`input[name='editBoardGame'][value='${game}']`);
                if (option) option.checked = true;
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

                        //show log out button
                        let logOutButton = document.getElementById("logOutButton");
                        logOutButton.style = "inline-block";
                        headerContainer.append(logOutButton);

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
                            .then(boardArray => {  // rename to avoid shadowing
                                const leftContent = document.getElementById("leftContent");

                                // remove old board divs (not the button)
                                leftContent.querySelectorAll(".boardsListItem").forEach(el => el.remove());

                                // append new boards
                                boardArray.forEach(b => {
                                    const selectedGame = b.SelectedGame || b.selectedGame || "none";

                                    // Add board to global object
                                    addBoard(b.BoardName, b.BoardPrivacy, b.BoardID, selectedGame);

                                    // Attach SelectedGame safely
                                    if (boards[b.BoardID]) {  // now references global object
                                        boards[b.BoardID].SelectedGame = selectedGame;
                                        console.log(`Attached SelectedGame to board ${b.BoardID}`);
                                    } else {
                                        console.warn("Board not found, cannot attach SelectedGame:", b);
                                    }
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

            function submitLogOut(){
                location.reload();
            }


            submitSignUpAjax("signUpFormElement", "InsertSignIn.php", "headerContainer");

           
            submitLogInAjax("logInFormElement", "CheckLogIn.php", "headerContainer");
            

            document.querySelector(".newBoardForm-Container").addEventListener("submit", processNewBoardForm);
            document.querySelector(".newCardForm-Container").addEventListener("submit", processNewCardForm);
            document.querySelector(".newListItemForm-Container").addEventListener("submit", processNewListItemForm);
            document.querySelector(".boardOptionsForm-Container").addEventListener("submit", processBoardOptionsForm);
            document.querySelector(".editCardForm-Container").addEventListener("submit", processEditCardForm);
            document.querySelector(".editListItemForm-Container").addEventListener("submit", processEditListForm);


        </script>
    
    
    </body>

</html>