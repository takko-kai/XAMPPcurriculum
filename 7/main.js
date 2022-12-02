//問1
let num = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(numbers) {
  for (let i = 0; i < numbers.length; i++) {
    if(numbers[i]%2===0){
      console.log(numbers[i] + 'は偶数です');
    }
  }   
}
isEven(num);

//問2
class Car{
  constructor(nenryou,bangou) {
     this.nenryou = nenryou;
     this.bangou = bangou;
  }
  kuruma(){
    console.log(`${this.nenryou}は〇〇です。${this.bangou}は△△です。`);
  }
}
let car = new Car('ガソリン','ナンバー');
car.kuruma();