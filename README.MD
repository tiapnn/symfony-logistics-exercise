#### Symfony Logistics Exercise

**Contact:**
*   Email: tiapnn@yahoo.it
*   Name: Mattia Penna

**Requirements:**

*   Create an API endpoint to query the status of a shipment handled by a courier.
*   The code does not necessarily need to run or be functional.
*   Prioritize writing custom classes over extensive use of framework features.

**Time Available:**

*   2 hours 30 minutes

**Proposed Solution:**

To create a robust, scalable, and maintainable service, the ideal solution would involve using Symfony (latest stable version) along with API Platform and EasyAdmin. This setup would allow for dynamic management of entities and related APIs with minimal source code modification.

The main identified entities are:

*   **`ShipmentStatus`**: Represents the request and response containing information about the status of a specific shipment.
*   **`Courier`**: Represents the different partner couriers. There is a *one-to-many* relationship between `Courier` and `ShipmentStatus` (one courier handles many shipments).

Given the limited time and the focus on application logic rather than full framework integration, a *mockup* of the required endpoint has been implemented, simulating the described architecture.

**Code:**

*   [Endpoint Mockup](api/v1/shipment-status/index.php) 👈🏼 Click here to see the mockup implementation.