
	function check(){
		var dropdown = document.getElementById("movie")
		var val = dropdown.options[dropdown.selectedIndex].value;
		
		if(val == "RC"){
			document.getElementById("RC").style.display = "inline-block";
			document.getElementById("CH").style.display = "none";
			document.getElementById("AC").style.display = "none";
			document.getElementById("AF").style.display = "none";
		
		}
		else if(val == "CH"){
			document.getElementById("CH").style.display = "inline-block";
			document.getElementById("RC").style.display = "none";
			document.getElementById("AC").style.display = "none";
			document.getElementById("AF").style.display = "none";
		}
		else if(val == "AF"){
			document.getElementById("AF").style.display = "inline-block";
			document.getElementById("RC").style.display = "none";
			document.getElementById("AC").style.display = "none";
			document.getElementById("CH").style.display = "none";
		}
		else if(val == "AC"){
			document.getElementById("AC").style.display = "inline-block";
			document.getElementById("RC").style.display = "none";
			document.getElementById("AF").style.display = "none";
			document.getElementById("CH").style.display = "none";
		}
		
	}
		function check2(){
			var dropdownRC = document.getElementById("RC");
			var val = dropdownRC.options[dropdownRC.selectedIndex].value;
			
			var dropdownCH = document.getElementById("CH");
			var val2 = dropdownCH.options[dropdownCH.selectedIndex].value;
			
			var dropdownAF = document.getElementById("AF");
			var val3 = dropdownAF.options[dropdownAF.selectedIndex].value;
			
			var dropdownAC = document.getElementById("AC");
			var val4 = dropdownAC.options[dropdownAC.selectedIndex].value;
			
			if(val || val2 || val3 || val4){
				document.getElementById("dds").style.display = "inline";
		}
		
	}
	function myFunc(){
			var sf = document.getElementById("seats[SF]")
			var sft = sf.options[sf.selectedIndex].value;
			
			var sp = document.getElementById("seats[SP]");
			var spt = sp.options[sp.selectedIndex].value;
			
			var sc = document.getElementById("seats[SC]");
			var sct = sc.options[sc.selectedIndex].value;
			
			var fa = document.getElementById("seats[FA]");
			var fat = fa.options[fa.selectedIndex].value;
			
			var fc = document.getElementById("seats[FC]");
			var fct = fc.options[fc.selectedIndex].value;
			
			var ba = document.getElementById("seats[BA]");
			var bat = ba.options[ba.selectedIndex].value;
			
			var bf = document.getElementById("seats[BF]");
			var bft = bf.options[bf.selectedIndex].value;
			
			var bc = document.getElementById("seats[BC]");
			var bct = bc.options[bc.selectedIndex].value;
			
			var dropdownRC = document.getElementById("RC");
			var val = dropdownRC.options[dropdownRC.selectedIndex].value;
			
			var dropdownCH = document.getElementById("CH");
			var val2 = dropdownCH.options[dropdownCH.selectedIndex].value;
			
			var dropdownAF = document.getElementById("AF");
			var val3 = dropdownAF.options[dropdownAF.selectedIndex].value;
				
			var dropdownAC = document.getElementById("AC");
			var val4 = dropdownAC.options[dropdownAC.selectedIndex].value;
			
			var num = 0;

			
			if(val == 'SAT-06' || val == 'SUN-06' || val2 == 'WED-06' || val2 == 'THU-06'|| 
			val2 == 'FRI-06'|| val2 == 'SAT-12'|| val2 == 'SUN-12'|| val3 == 'SAT-03'|| 
			val3 == 'SUN-03'|| val4 == 'WED-09'|| val4 == 'THU-09'|| val4 == 'FRI-09'|| 
			val4 == 'SAT-09'|| val4 == 'SUN-09' ){
				num = sft * 18.5 + spt *15.5 + sct * 12.5 + fat * 30 + fct * 25 + bat * 33 + bft * 30 + bct * 30;
			}
			else{
				num = sft * 12.5 + spt *10.5 + sct * 8.5 + fat * 25 + fct * 20 + bat * 22 + bft * 20 + bct * 20;
			}
			
			var n = num.toFixed(2);	
			document.getElementById("total").innerHTML = "Total: $" + n;
			
			
		}
	function subS(){
			var sf = document.getElementById("seats[SF]")
			var sft = sf.options[sf.selectedIndex].value;
			
			var sp = document.getElementById("seats[SP]");
			var spt = sp.options[sp.selectedIndex].value;
			
			var sc = document.getElementById("seats[SC]");
			var sct = sc.options[sc.selectedIndex].value;
			
			var dropdownRC = document.getElementById("RC");
			var val = dropdownRC.options[dropdownRC.selectedIndex].value;
			
			var dropdownCH = document.getElementById("CH");
			var val2 = dropdownCH.options[dropdownCH.selectedIndex].value;
			
			var dropdownAF = document.getElementById("AF");
			var val3 = dropdownAF.options[dropdownAF.selectedIndex].value;
				
			var dropdownAC = document.getElementById("AC");
			var val4 = dropdownAC.options[dropdownAC.selectedIndex].value;
			
			var num = 0;

			
			if(val == 'SAT-06' || val == 'SUN-06' || val2 == 'WED-06' || val2 == 'THU-06'|| 
			val2 == 'FRI-06'|| val2 == 'SAT-12'|| val2 == 'SUN-12'|| val3 == 'SAT-03'|| 
			val3 == 'SUN-03'|| val4 == 'WED-09'|| val4 == 'THU-09'|| val4 == 'FRI-09'|| 
			val4 == 'SAT-09'|| val4 == 'SUN-09' ){
				num = sft * 18.5 + spt *15.5 + sct * 12.5 ;
			}
			else{
				num = sft * 12.5 + spt *10.5 + sct * 8.5 ;
			}
			
			var n = num.toFixed(2);	
			document.getElementById("subtotalS").innerHTML = "Standard subtotal: $" + n;

	}
	
	
	function subF(){
			
			var fa = document.getElementById("seats[FA]");
			var fat = fa.options[fa.selectedIndex].value;
			
			var fc = document.getElementById("seats[FC]");
			var fct = fc.options[fc.selectedIndex].value;
		
			
			var dropdownRC = document.getElementById("RC");
			var val = dropdownRC.options[dropdownRC.selectedIndex].value;
			
			var dropdownCH = document.getElementById("CH");
			var val2 = dropdownCH.options[dropdownCH.selectedIndex].value;
			
			var dropdownAF = document.getElementById("AF");
			var val3 = dropdownAF.options[dropdownAF.selectedIndex].value;
				
			var dropdownAC = document.getElementById("AC");
			var val4 = dropdownAC.options[dropdownAC.selectedIndex].value;
			
			var num = 0;

			
			if(val == 'SAT-06' || val == 'SUN-06' || val2 == 'WED-06' || val2 == 'THU-06'|| 
			val2 == 'FRI-06'|| val2 == 'SAT-12'|| val2 == 'SUN-12'|| val3 == 'SAT-03'|| 
			val3 == 'SUN-03'|| val4 == 'WED-09'|| val4 == 'THU-09'|| val4 == 'FRI-09'|| 
			val4 == 'SAT-09'|| val4 == 'SUN-09' ){
				num = fat * 30 + fct * 25 ;
			}
			else{
				num = fat * 25 + fct * 20 ;
			}
			
			var n = num.toFixed(2);	
			document.getElementById("subtotalF").innerHTML = "First Class subtotal: $" + n;
			
			
		}
		function subB(){
			
			var ba = document.getElementById("seats[BA]");
			var bat = ba.options[ba.selectedIndex].value;
			
			var bf = document.getElementById("seats[BF]");
			var bft = bf.options[bf.selectedIndex].value;
			
			var bc = document.getElementById("seats[BC]");
			var bct = bc.options[bc.selectedIndex].value;
			
			var dropdownRC = document.getElementById("RC");
			var val = dropdownRC.options[dropdownRC.selectedIndex].value;
			
			var dropdownCH = document.getElementById("CH");
			var val2 = dropdownCH.options[dropdownCH.selectedIndex].value;
			
			var dropdownAF = document.getElementById("AF");
			var val3 = dropdownAF.options[dropdownAF.selectedIndex].value;
				
			var dropdownAC = document.getElementById("AC");
			var val4 = dropdownAC.options[dropdownAC.selectedIndex].value;
			
			var num = 0;

			
			if(val == 'SAT-06' || val == 'SUN-06' || val2 == 'WED-06' || val2 == 'THU-06'|| 
			val2 == 'FRI-06'|| val2 == 'SAT-12'|| val2 == 'SUN-12'|| val3 == 'SAT-03'|| 
			val3 == 'SUN-03'|| val4 == 'WED-09'|| val4 == 'THU-09'|| val4 == 'FRI-09'|| 
			val4 == 'SAT-09'|| val4 == 'SUN-09' ){
				num =bat * 33 + bft * 30 + bct * 30;
			}
			else{
				num = bat * 22 + bft * 20 + bct * 20;
			}
			
			var n = num.toFixed(2);	
			document.getElementById("subtotalB").innerHTML = "Bean bag subtotal: $" + n;
			
			
		}
	
	function del(num){
		alert("1");
		sessionStorage.removeItem();
	}

	
	function time()
	{
		document.write(new Date().getFullYear());
	}
	
	function fullCheck()
	{
		var check1 = new checkName();
		var check2 = new checkNumber();
		var check3 = new checkEmail();
		
		if(check1.check == true & check2.check == true & check3.check == true)
		{
			return true;
		} 
		else
			return false;
	}
	
	function checkName()
	{
		var name = document.getElementById("name");
		var checker = document.getElementById("nameCheck");
		if(name.value == "")
		{
			name.style.border = "1px solid red";
			name.style.color = "red";
			checker.innerHTML = "Please enter a name!";
			this.check = false;
		}
		else if(!isAlpha(name.value))
		{
			name.style.border = "1px solid orange";
			name.style.color = "orange";
			checker.innerHTML = "Please only use the letters A-Z!";
			this.check = false;
		}
		else
		{
			name.style.color = "green";
			name.style.border = "1px solid green";
			checker.innerHTML = "";
			this.check = true;
		} 
	}
	
	function checkEmail()
	{
		var email = document.getElementById("email");
		var checker = document.getElementById("emailCheck");
		if(email.value == "")
		{
			email.style.border = "1px solid red";
			email.style.color = "red";
			checker.innerHTML = "Please enter an email!";
			this.check = false;
		}
		else if(!isEmail(email.value))
		{
			email.style.border = "1px solid orange";
			email.style.color = "orange";
			checker.innerHTML = "Please enter a valid email!";
			this.check = false;
		}
		else
		{
			email.style.color = "green";
			email.style.border = "1px solid green";
			checker.innerHTML = "";
			this.check = true;
		}
	}

	function checkNumber()
	{
		var phone = document.getElementById("phone");
		var checker = document.getElementById("phoneCheck");
		if(phone.value == "")
		{
			phone.style.border = "1px solid red";
			phone.style.color = "red";
			checker.innerHTML = "Please enter an australian phone number!";
			this.check = false;
		}
		else if(!isAU(phone.value))
		{
			phone.style.border = "1px solid orange";
			phone.style.color = "orange";
			checker.innerHTML = "Please enter an australian phone number!";
			this.check = false;
		} 
		else
		{
			phone.style.color = "green";
			phone.style.border = "1px solid green";
			checker.innerHTML = "";
			this.check = true;
		}
	}
	
	
	function isAlpha(str)
	{
		var str = str;
		var i = /^[a-zA-Z ]*$/;
		return i.test(str);
	}
	
	function isEmail(str)
	{
		var str = str;
		var i = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return i.test(str);
	}
	
	function isAU(str)
	{
		var str = str;
		var i = /^\(?(?:\+?61|0)(?:(?:2\)?[ -]?(?:3[ -]?[38]|[46-9][ -]?[0-9]|5[ -]?[0-35-9])|3\)?(?:4[ -]?[0-57-9]|[57-9][ -]?[0-9]|6[ -]?[1-67])|7\)?[ -]?(?:[2-4][ -]?[0-9]|5[ -]?[2-7]|7[ -]?6)|8\)?[ -]?(?:5[ -]?[1-4]|6[ -]?[0-8]|[7-9][ -]?[0-9]))(?:[ -]?[0-9]){6}|4\)?[ -]?(?:(?:[01][ -]?[0-9]|2[ -]?[0-57-9]|3[ -]?[1-9]|4[ -]?[7-9]|5[ -]?[018])[ -]?[0-9]|3[ -]?0[ -]?[0-5])(?:[ -]?[0-9]){5})$/;
		return i.test(str);
	}
	
	
	
