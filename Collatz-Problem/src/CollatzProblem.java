
public class CollatzProblem {

	public static void main(String[] args) {
		
		for( int i =1; i<=1000; i++){
			//int i to count up
			int n = i;
			/*int n to count the Collatz-Problem and still
			  have int i to put out the start value,
			  before the Collatz Row is listet**/
			System.out.print(n +": ");
		
			do{
				if(n%2==0){
					n=n/2;
				}
				else{ n=3*n+1;}
			
				System.out.print(n + " ");}
		
			while(n>1);
			System.out.println();
		}
		
	}

}
