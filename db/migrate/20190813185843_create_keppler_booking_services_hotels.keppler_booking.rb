# This migration comes from keppler_booking (originally 20190813185840)
class CreateKepplerBookingServicesHotels < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_services_hotels do |t|
      t.string :name
      t.string :icon
      t.text :description
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end
