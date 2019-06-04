class AddDocumentationToKepplerBookingReservations < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_booking_reservations, :documentation, :integer
    add_column :keppler_booking_reservations, :phone, :integer
  end
end
