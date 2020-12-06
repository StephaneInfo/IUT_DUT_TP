/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package banque;
import java.util.*;
import java.lang.System;


/**
 *
 * @author p1514542
 */
public class Banque {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Compte a=new Compte("Alain", 50);
        Compte b= new Compte("Romain", 350);
        BufferedReader inClavier=new BufferedReader(new InputStreamReader(System.in));
        
        System.out.println("Donner un nom de compte");
        String cpt=inClavier.readLine();
        inClavier.close();
        //BufferedReader inClavier=new BufferedReader(new InputStreamReader(System.in));
        //String sld=inClavier.ReadLine();
        //inClavier.close();
        //public static int parseInt(String sld);
        Compte c=new Compte(cpt,50);
        System.out.println(a);
        System.out.println(b);
        a.Deposer(150);
        System.out.println(a);
        System.out.println(c);
    }
    
}
