<?class Students{
	public $arr = array();
	public function __construct(){
				$this->arr[0]["name"] = "Безединов Мирослав";
				$this->arr[0]["age"] = "18";
				$this->arr[0]["n_town"] = "Запоріжжя, Украiна";
				$this->arr[0]["phone"] = "+380666673499";

				$this->arr[1]["name"] = "Сірий Анатолій";
				$this->arr[1]["age"] = "18";
				$this->arr[1]["n_town"] = "Запорiжжя, Украiна";
				$this->arr[1]["phone"] = "+380950483258";

				$this->arr[2]["name"] = "Волошко Сергій";
				$this->arr[2]["age"] = "19";
				$this->arr[2]["n_town"] = "Запорiжжя, Украiна";
				$this->arr[2]["phone"] = "+380963440918";

				$this->arr[3]["name"] = "Корнієнко Богдан";
				$this->arr[3]["age"] = "19";
				$this->arr[3]["n_town"] = "Запорiжжя, Украiна";
				$this->arr[3]["phone"] = "+380998726614";

				$this->arr[4]["name"] = "Жуков Олег";
				$this->arr[4]["age"] = "18";
				$this->arr[4]["n_town"] = "Запорiжжя, Украiна";
				$this->arr[4]["phone"] = "+380677722236";

				$this->arr[5]["name"] = "Грицюк Денис";
				$this->arr[5]["age"] = "18";
				$this->arr[5]["n_town"] = "Запорiжжя, Украiна";
				$this->arr[5]["phone"] = "+38099893698"; 
		
	}
	
	public function PlusAge(){
		$i=0;
		while ($i<7)
		{
			if ($i%2==0)
			{
				$this->arr[$i]["age"]=7;
			}
			else if ($i%3==0)
			{
				$this->arr[$i]["age"]=8;
			}
			else {$this->arr[$i]["age"]=9;}
			$i++;
		}
	}
	public function TotalAge(){
		foreach ($this->arr as $value)
		{
			$total+=$value["age"];
		}
		echo $total;
	}
	public function MidAge(){
		foreach ($this->arr as $value)
		{
			$mid+=$value["age"];
		}
		$mid=$mid/7;
		echo $mid;
	}
	
	public function NewStud($newst){
		$this->arr[count($this->arr)] = $newst;	
	}
}	
	?>