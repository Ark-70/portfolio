$(function() {

  // module aliases
let Engine = Matter.Engine,
    Render = Matter.Render,
    World = Matter.World,
    Constraint = Matter.Constraint,
    MouseConstraint = Matter.MouseConstraint,
	Mouse = Matter.Mouse,
    Bodies = Matter.Bodies;

// create an engine
let engine = Engine.create(),
	world = engine.world;

// create a renderer
let render = Render.create({
    element: document.body,
    engine: engine
});

// create two boxes and a ground
let boxA = Bodies.rectangle(400, 200, 80, 80);
let boxB = Bodies.rectangle(450, 50, 80, 80);
let ground = Bodies.rectangle(400, 610, 810, 60, { isStatic: true });


// add mouse control
    var mouse = Mouse.create(render.canvas),
        mouseConstraint = MouseConstraint.create(engine, {
            mouse: mouse,
            constraint: {
                // allow bodies on mouse to rotate
                angularStiffness: 0.3,
                render: {
                    visible: false
                }
            }
        });

    World.add(world, mouseConstraint);

// keep the mouse in sync with rendering
render.mouse = mouse;


// add all of the bodies to the world
World.add(engine.world, [boxA, boxB, ground]);

// run the engine
Engine.run(engine);

// run the renderer
Render.run(render);

});
