
  		function quantity_of_users () {
 
 				var quanty = prompt("Введите количество пользователей которое вы хотите добавить", 0);

 			if (isNaN(quanty) || quanty < 3 ){
 				alert("Вы ввели некоректное значение!");

	             return quantity_of_users();
 			}

 			else 	return  quanty;

}

		function user_string(){

			return prompt("Введите имя, фамилию, имейл, возраст и профессию пользователя через запятую", " ");
		}

		function user_obj (user_string) {

			var user_arr = user_string.split(", ", 5),
			    user ={};

		  user.name = user_arr[0];
		  user.surname = user_arr[1];
		  user.email = user_arr[2];
		  user.age = user_arr[3];
		  user.prof = user_arr[4];

		   return user;
	
		}

		function sort (users, sort_field) {

        	return users.sort(symbolSort);
}
   

		function symbolSort (a, b) {
			
			 if (a[sort_field] > b[sort_field]) 

			 	{return 1} ;
			
			 if (a[sort_field] < b[sort_field]){return -1};

			  return 0;
          	
	};
		


		var users = [],
		quantity = quantity_of_users(),
		str,
		sort_field,
		result;

		for(var i = 0; i < quantity; i++){

			str = user_string();
			user_obj(str);
			users.push(user_obj(str));

}
 console.log(users);

		sort_field = prompt("Введите поле по которому сортировать", "name");
		result = sort(users, sort_field);

		console.log(result);


for(var i = 0; i < users.length; i++){


var newDiv = document.createElement('div');
    newDiv.innerHTML = "<p><b>Имя: </b>"+result[i].name+"<br></p>"+
                        "<p><b>Фамилия: </b>"+result[i].surname+"<br></p>"+
                        "<p><b>Имейл: </b>"+result[i].email+"<br></p>"+
                        "<p><b>Возраст: </b>"+result[i].age+"<br></p>"+
                        "<p><b>Профессия: </b>"+result[i].prof+"<br></p><hr><hr>";

 	document.body.appendChild(newDiv);

}
   

			










