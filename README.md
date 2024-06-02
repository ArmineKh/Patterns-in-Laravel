## Patterns in Laravel

## Repository Pattern

It provides an abstraction layer between the application code and the database, which makes it easier to maintain and test the application.

1.  Create a Repository Interface
2.  Create a Repository Class 
3.  Bind the interface to the implementation
4.  Use the Repository in the Controller

## Service Layer Pattern

The Service Layer Pattern helps to organize business logic and keep controllers clean.

1.  Create Service Interface
2.  Create a Service Class that implement the Service Interface
3.  Bind the interface to the implementation or create new ServiceProvider
4.  Use the Service in the Controller

## Dependency Injection

The usage of Dependency Injection promotes loose coupling and makes code more testable.
Constructor injection in a controller 

public function __construct(UserServiceInterface $userService)
{
$this->userService = $userService;
}

## Single Responsibility Principle

Each class should have a single responsibility. Break down large classes into smaller, focused ones.


## Repository and Service Patterns Together

Combine Repository and Service Patterns to separate business and data access logic.

## Form Request Validation

Using Form Requests to handle validation logic, keeping controllers clean.

## Event-Driven Architecture

Using events and listeners to decouple different parts of the application.

1. Create an Event
2. Create a Listener
3. Register the Event and Listener in EventServiceProvider
4. Dispatch the Event.

## Traits

Using traits to reuse common functionality across multiple classes.

## Command Bus Pattern (Creating Job)

Use Laravel's command bus to encapsulate business logic in commands.

1. Create Job
2. Dispatch Job

## Observers

Observers allows to listen for events that occur on a model and execute code in response to those events. This is useful  for handling things like logging, auditing, sending notifications.

1. Create an Observer
2. Define Observer Methods
3. Register the Observer in the boot method of the AppServiceProvider
4. Using the observer

## Global Scope

Global scopes in Laravel allow you to apply certain conditions to all queries made against a particular database model.

1. To create a global scope, you’ll need to create a new class that extends Illuminate\Database\Eloquent\Scope and implements the apply() method.
The apply() method defines the constraint you want to apply to queries. It receives two arguments: the Builder instance (representing the query builder) and the Model instance (representing the model).
2. Registering the Global Scope with the model
 protected static function boot() {
   parent::boot();
   static::addGlobalScope(new OrderByScope());
 }
3. Once registered, the global scope will automatically apply to all queries for the model. 




