# This migration comes from keppler_booking (originally 20190813185942)
class CreateKepplerBookingServicesRooms < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_services_rooms do |t|
      t.string :name
      t.string :icon
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end
