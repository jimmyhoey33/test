package ImageManipulation;

import java.awt.image.*;
import java.awt.*;
import java.util.*; 
/**
 * 
 * Time-stamp: <2014-02-02 15:20:40 rlc3>
 * 
 * ImageManipulation.java
 *
 * Class allows the manipulation of an image by 
 * two alternative methods.
 * 
 * NOTE all "// <-- delete!!" below should be deleted!
 *
 * @author Roy Crole
 * 
 */

public class ImageManipulation { 

    /**
     * Twirls (some of) the pixels in a specified square sub-area A(x,y) of an image. 
     *
     * A(x,y) is a square with center (x,y) 
     * and corners (x-size, y-size), (x+size,y-size), (x+size, y+size),
     * (x-size, y+size).
     * In case A(x,y) is not entirely within the given image, 
     * the spiral method keeps entire image unchanged.
     *
     * <p>
     *  Every pixel with distance to (x,y) that is less than size and greater than n, will 
     *  be rotated around the point (x,y). The rotation is clockwise and the angle for 
     *  pixels at distance size from (x,y) will be 0, for 
     *  pixels at distance n from (x,y) will be 2*PI, and 
     *  for pixels in between the two distances the angle changes linearly (see formula below).
     * </p>
     *  
     * <p> 
     * Due to potential rounding errors your method should not go through each pixel in A(x,y) 
     * and "move" it to its new location. It should, however, go through each pixel p in A(x,y), 
     * calculate which pixel p' will be "moved" to the location of p and then perform the change by
     * setting the RGB of p to be the RGB of p'. !!! WHY ????  !!!
     * </p>
     *
     * <p>
     *   Hints:<br/> 
     *   <ul>
     *     <li>
     *	     The distance of a point (a,b) to the point (c,d) is the square root of (a-c)*(a-c)+(b-d)*(b-d).
     *     </li>
     *     <li>
     *	     In MATHEMATICAL coordinate geometry, a point (a,b) in R x R (R the reals) 
     * 	     means "move a to the right and b up". 
     * 	     An ANTI-CLOCKWISE rotation of a point (a,b) around the origin (0,0) with angle alpha 
     * 	     will result in the point (a*cos(alpha)-b*sin(alpha), a*sin(alpha)+b*cos(alpha)).
     * 	     Note that p' above is computed from p, by ROTATING p anti-clockwise.
     *     </li>
     *     <li>
     *       The angle by which a pixel is moved is equal to 2*PI*(1-(d-n)/(size-n)), where d is distance
     *       of the pixel to the point (x,y).
     *     </li>
     *   </ul>
     *
     * </p>
     *
     * <p> Note: Due to the rounding/integer division effects you should work with 
     * doubles and only convert to an int when needed. </p>
     *
     * <p> Note: In the skeleton program a copy, called temp,
     * of the BufferedImage is made.
     * Use the temp image to get the rgb values and set the new
     * values to the BufferedImage image. </p>
     *
     * @param image the image you are performing the twirls on
     * @param n the smallest distance from the center of square A(x,y) at which pixels are rotated 
     * @param x the x-coordinate of the centre of the square A(x,y)
     * @param y the y-coordinate of the centre of the square A(x,y)
     * @param size half the length/width of the square
     */

    static public void spiral(BufferedImage image, int n, int x, int y, int size) {
					 
	BufferedImage temp=new BufferedImage(image.getWidth(), image.getHeight(), image.getType());
        (temp.getGraphics()).drawImage(image,0,0,image.getWidth(), image.getHeight(),null );
        //System.out.println("hello");
// check if A(x,y) lies within image
// <-- delete!! if (??) {

// loop visiting each pixel in A(x,y) at position (i,j) 
// <-- delete!! for (??) {

  // *****************************************************************************
  // ?? the rest of your code goes here: a loop for j, plus remainder of your code
  // *****************************************************************************

// <-- delete!! } // end forLoop i

// <-- delete!! } // end check that A(x,y) is in image 
	
    } // end method spiral 

    /** 
    * performs a shift of color in a specified area.<p>
    * 
    * <p> The specified area is a subset S of a square A(x,y) with center (x,y) 
    * and corners (x-size, y-size), (x+size,y-size), (x+size, y+size),
    * (x-size, y+size).
    * The subset S is the intersection of A(x,y) and the image;
    * if A(x,y) lies completely within the image, then we colour shift all of A(x,y) 
    * </p>
    * 
    *  <p> A pixel in S that is less than 2*n pixels away 
    *	from any edge apart from the bottom edge of the image will not be changed.
    *   All other pixels of S will be changed in the following way:
    *	The red component will be the red component of the pixel that is n-pixels to the left. 
    *   The green component will stay unchanged. 
    *   The blue component will be the blue component of the pixel that is 2*n-pixels up.
    *  </p>
    *
    * <p> Note: In the skeleton program a copy, called temp,
    * of the BufferedImage is made.
    * Use the temp image to get the rgb values and set the new
    * values to the BufferedImage image. </p>
    *
    * @param image the image you are performing the shifts on
    * @param n as defined above 
    * @param x the x-coordinate of the centre of the square A(x,y)
    * @param y the y-coordinate of the centre of the square A(x,y)
    * @param size half the length/width of the square
    *
    */

    static public void phaseShift(BufferedImage image, int n, int x, int y, int size) {
    	
    	
    	
	// creates a copy of the image called temp
        BufferedImage temp=new BufferedImage(image.getWidth(), image.getHeight(), image.getType());
        (temp.getGraphics()).drawImage(image,0,0,image.getWidth(), image.getHeight(),null);
       // System.out.println(temp.getRGB(x, y));
        

  // *****************************************************************************
  // your code goes here 
  // *****************************************************************************
        
        
        int x_size = x - size;
        int y_size = y - size;
        
        int xAsize = x + size;
        int yAsize = y + size;
        
        for (int row = y_size; row <= yAsize; row++ ) {
        	if (!(row < 0 || row > temp.getWidth())) {
        		for (int col = x_size; col <= xAsize; col++ ) {
        			if (!(col < 0 || col > temp.getWidth())) {
        				//System.out.println(temp.getRGB(x, y));
        				int toGetRed = temp.getRGB(col-n, row);
        		        int b, r, g;
        		        //b = (toGetRed & 0xff);
        		        //g = (toGetRed & 0xff00) >> 8;
        		        r = (toGetRed & 0xff0000) >> 16;
        		        
        				int toGetBlue = temp.getRGB(col, row-(2*n));
        				b = (toGetBlue & 0xff);
        		        
        				int toGetGreen = temp.getRGB(col, row);
        				g = (toGetGreen & 0xff00) >> 8;
        				
        				int newRGB = r << 16 | g << 8 | b;
        				//System.out.println("new + " + newRGB);
        				image.setRGB(col, row, newRGB);
        			}      
        		}
        	}
        	else { System.out.println("that row is off the screen"); }
        	
        }
        
    } // end method phaseShift 

} // ImageManipulation
