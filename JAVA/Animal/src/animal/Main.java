/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package animal;
import java.util.*;

/**
 *
 * @author faycal
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Chien test=new Chien("Milou");
        Chat test2=new Chat("Félix");
        Oiseau test3 = new Oiseau("Titi");
        
        Animal[]tab={test,test2,test3};
        for (int i=0;i<tab.length;i++)System.out.println(tab[i]);
        /*Vector v =new Vector();
        v.add(test);
        v.add(test2);
        v.add(test3);
        for(int i =0;i<v.size();i++){
            System.out.println(v.elementAt(i));
        }*/
    }
    
}
