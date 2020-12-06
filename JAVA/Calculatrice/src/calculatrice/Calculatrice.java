/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package calculatrice;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

/**
 *
 * @author faycal
 */
public class Calculatrice extends JFrame implements ActionListener {
    JLabel op1=new JLabel("Opérande 1");
    JLabel op2=new JLabel("Opérande 2");
    JLabel res=new JLabel("Résultat");
    JTextField oper1=new JTextField(10);
    JTextField oper2=new JTextField(10);
    JTextField resul=new JTextField(20);
    JButton add=new JButton("+");
    JButton mult=new JButton("*");
    JButton sous=new JButton("-");
    JButton div=new JButton("/");
    public Calculatrice(){
         super("Calculatrice");
         this.setSize(400,200);
         this.setLocationRelativeTo(null);
         Container panneau=getContentPane();
         panneau.setLayout(new BorderLayout());
         JPanel ligne1 =new JPanel();
         ligne1.add(op1);
         ligne1.add(oper1);
         ligne1.add(op2);
         ligne1.add(oper2);
         panneau.add(ligne1,BorderLayout.NORTH);
         
         JPanel ligne2 =new JPanel();
         ligne2.add(res);
         ligne2.add(resul);
         
         panneau.add(ligne2,BorderLayout.CENTER);
         
         JPanel ligne3 =new JPanel();
         add.addActionListener(this);
         ligne3.add(add);
         mult.addActionListener(this);
         ligne3.add(mult);
         sous.addActionListener(this);
         ligne3.add(sous);
         div.addActionListener(this);
         ligne3.add(div);
         panneau.add(ligne3,BorderLayout.SOUTH);
         setContentPane(panneau);
         setVisible(true);
         this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
    public void actionPerformed(ActionEvent e){
        try{
        double a=Double.parseDouble(oper1.getText()),b=Double.parseDouble(oper2.getText());
        if(e.getSource()==add)resul.setText(String.valueOf(a+b));
        if(e.getSource()==mult)resul.setText(String.valueOf(a*b));
        if(e.getSource()==div)resul.setText(String.valueOf(a/b));
        if(e.getSource()==sous)resul.setText(String.valueOf(a-b));
        }
        catch(NumberFormatException evt){resul.setText("nombres seulement");}
    }
}
