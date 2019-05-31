class AddStatusToKepplerBookingReservations < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_booking_reservations, :status, :string
  end
end
