#ping pong game

import turtle 

okno = turtle.Screen()
okno.title("Ping Pong")
okno.bgcolor("black")
okno.setup(width=800,height=600)
okno.tracer(0)

#paletka a
pal_a = turtle.Turtle()
pal_a.speed(0)
pal_a.shape("square")
pal_a.shapesize(stretch_wid=5,stretch_len=1)
pal_a.color("white")
pal_a.penup()
pal_a.goto(-350, 0)


#paletka b
pal_b = turtle.Turtle()
pal_b.speed(0)
pal_b.shape("square")
pal_b.shapesize(stretch_wid=5,stretch_len=1)
pal_b.color("white")
pal_b.penup()
pal_b.goto(350, 0)


#ball
pilka = turtle.Turtle()
pilka.speed(0)
pilka.shape("square")
pilka.color("white")
pilka.penup()
pilka.goto(0, 0)
pilka.x = 0.1
pilka.y = -0.1
speed=1

#scoreboard
tablica = turtle.Turtle()
tablica.speed(0)
tablica.color("white")
tablica.penup()
tablica.hideturtle()
tablica.goto(0,260)
tablica.write("Player A: 0 Player B: 0", align="center",font=("Courier",24,"bold"))

#movement
def pal_a_up():
    y=pal_a.ycor()
    y+=20
    pal_a.sety(y)

def pal_a_down():
    y=pal_a.ycor()
    y-=20
    pal_a.sety(y)

def pal_b_up():
    y=pal_b.ycor()
    y+=20
    pal_b.sety(y)

def pal_b_down():
    y=pal_b.ycor()
    y-=20
    pal_b.sety(y)

#controls
okno.listen()
okno.onkeypress(pal_a_up,"w")
okno.onkeypress(pal_a_down,"s")
okno.onkeypress(pal_b_up,"Up")
okno.onkeypress(pal_b_down,"Down")

#score
score_a=0
score_b=0

#loop
while score_a<10 or score_b<10:
    okno.update()

    #ruchy pilki
    pilka.setx(pilka.xcor()+pilka.x)
    pilka.sety(pilka.ycor()+pilka.y)

    #kolizja
    if pilka.ycor()>290 or pilka.ycor()<-290:
        pilka.y*=-1

    if pilka.xcor()>390:
        pilka.goto(0,0)
        score_b+=1
        tablica.clear()
        tablica.write("Player A: {} Player B: {}".format(score_a, score_b), align="center",font=("Courier",24,"bold"))
        if pilka.x > 0:
            pilka.x=-0.1
        else:
            pilka.x=0.1


    if pilka.xcor()<-390:
        pilka.goto(0,0)
        score_a+=1
        tablica.clear()
        tablica.write("Player A: {} Player B: {}".format(score_a, score_b), align="center",font=("Courier",24,"bold"))
        if pilka.x > 0:
            pilka.x=-0.1
        else:
            pilka.x=0.1
        

    if (pilka.xcor()>340 and pilka.xcor()<350) and (pilka.ycor()<pal_b.ycor()+50 and pilka.ycor()>pal_b.ycor()-50):
        pilka.x*=-1.0
        pilka.x+=pilka.x*0.2

    if (pilka.xcor()<-340 and pilka.xcor()>-350) and (pilka.ycor()<pal_a.ycor()+50 and pilka.ycor()>pal_a.ycor()-50):
        pilka.x*=-1.0
        pilka.x+=pilka.x*0.2

