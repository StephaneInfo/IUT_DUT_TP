/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package animal;

/**
 *
 * @author faycal
 */
public abstract class Animal {
    String nom;
    public Animal(String _nom){
        nom=_nom;
       // System.out.println("constructeur animal appelé");
    }
    public String toString(){return "Cri de "+nom+" "+this.cri();}
    public abstract String cri();
}
