import java.util.Scanner;
import java.io.*;
public class PROGRAM {
    public static void main(String[] args) {
        try{
        	Scanner scan = new Scanner(System.in);
        	File file1 = new File("C:/Users/DAVE/Desktop/ALVIN/grades.txt");
        	File file2 = new File("C:/Users/DAVE/Desktop/ALVIN/subjects.txt");
        	
        	if(file1.exists() && file2.exists()){
        		System.out.println("File already exists. ");
        		
        		BufferedReader br1 = new BufferedReader(new FileReader("grades.txt"));
        		BufferedReader br2 = new BufferedReader(new FileReader("subjects.txt"));
        		String g, s;
        		int count=5;
        		int finalgrade[] = new int[count];
        		String finalsubject[] = new String[count];
        		int index=0;
        		int index2=0;
        		while((s=br2.readLine())!=null){
        			finalgrade[index]=Integer.parseInt(br1.readLine());
        			finalsubject[index2]=s;
        			index2++;
        			index++;
        		}
        		br2.close();
        		for(int i=0; i<finalgrade.length; i++){
        			System.out.println(finalsubject[i]+": "+finalgrade[i]);
        		}
        		
        		int sum=0;
        		float average=0;
        		for(int i=0; i<finalgrade.length; i++){
        			sum=sum+finalgrade[i];
        		}
        		average=sum/count;
        		System.out.println("THE AVERAGE GRADE OF ALVIN IS: "+average);
        		if(average<75){
        			System.out.println("REMARKS: FAILED!");
        		}else{
        			System.out.println("REMARKS: PASSED!");
        		}        		
        	}else{
        		BufferedWriter bw1 = new BufferedWriter(new FileWriter("grades.txt"));
        		BufferedWriter bw2 = new BufferedWriter(new FileWriter("subjects.txt"));
        		
        		int grades[] = new int[5];
        		String subjects[] = new String[5];
        		//user input for the subjects
        		System.out.println("ENTER THE SUBJECTS: ");
        		for(int i=0; i<subjects.length; i++){
        			subjects[i]=scan.next();
        		}
        		//user input for the grades per subject.
        		for(int i=0; i<grades.length; i++){
        			System.out.println("ENTER THE GRADE OF: "+subjects[i]);
        			grades[i]=scan.nextInt();
        		}
        		//used to save the grades and subjects to the corresponding text file.
        		for(int i=0; i<grades.length; i++){
        			bw1.write(Integer.toString(grades[i]));
        			bw2.write(subjects[i]);
        			bw1.newLine();
        			bw2.newLine();
        		}
        		bw1.close();
        		bw2.close();
        		System.out.println("Data Saved!");
        	}
        }catch(IOException e){
        	System.err.println("Error opening file. "+e.getMessage());
        }
    }
}
